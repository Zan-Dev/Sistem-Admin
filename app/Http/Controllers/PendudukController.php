<?php

namespace App\Http\Controllers;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\KK;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
 
class PendudukController extends Controller
{
    function dataPenduduk(){
        $penduduk = Penduduk::get();
        return view('pages.penduduk.data-penduduk', compact('penduduk'));
    }

    function add(){
        $pekerjaan = Pekerjaan::all();
        return view('pages.penduduk.tambah-penduduk', compact('pekerjaan'));
    }

    function edit($nik){
        $penduduk = Penduduk::find($nik);
        $pekerjaan = Pekerjaan::all();
        return view('pages.penduduk.edit-penduduk', compact('penduduk', 'pekerjaan'));
    }

    function delete($nik){
        $penduduk = Penduduk::find($nik);
        $penduduk->delete();
        return redirect()->route('dataPenduduk');
    }

    function update(Request $request, $nik){        
        $validated = $request->validate([            
            'nama' => 'required',
            'kkId' => 'required',
            'statusHubungan' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'statusPerkawinan' => 'required',
            'jenisKelamin' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ], [
            'required' => 'Field :attribute harus diisi.',
            'date' => 'Field :attribute harus berupa tanggal yang valid.',
        ]);
                

        $penduduk = Penduduk::findOrfail($nik);        

        $penduduk->update($validated);

        return redirect()->route('dataPenduduk')->with('success', 'Data penduduk berhasil diperbarui!');
    }

    public function submit(Request $request){
        // 1. Validasi
        $request->validate([
            'nik' => 'required|unique:penduduk,nik',
            'kkId' => 'required',
            'statusHubungan' => 'required',            
        ], [
            'nik.unique' => 'NIK sudah terdaftar.',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $kk = KK::where('noKK', $request->kkId)->first();

                // 2. Logika Pembuatan KK Baru
                if (!$kk) {
                    if ($request->statusHubungan !== 'Kepala Keluarga') {                        
                        throw new \Exception('No KK tidak ditemukan. Pastikan No KK sudah terdaftar atau pilih status hubungan sebagai Kepala Keluarga.');                       
                    }

                    KK::create([                        
                        'noKK' => $request->kkId,
                        'nikKepalaKeluarga' => $request->nik,
                        'alamat' => $request->alamat,
                        'rt' => $request->rt,
                        'rw' => $request->rw,
                    ]);

                } else {
                    // 3. Cek jika Kepala Keluarga sudah ada
                    if ($request->statusHubungan === 'Kepala Keluarga') {                                                
                        throw new \Exception('No KK sudah memiliki Kepala Keluarga. Pilih status hubungan lain.');
                    }                    
                }

                Penduduk::create([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'kkId' => $request->kkId,
                    'statusHubungan' => $request->statusHubungan,
                    'tempatLahir' => $request->tempatLahir,
                    'tanggalLahir' => $request->tanggalLahir,
                    'statusPerkawinan' => $request->statusPerkawinan,
                    'jenisKelamin' => $request->jenisKelamin,
                    'kewarganegaraan' => $request->kewarganegaraan,
                    'pekerjaan_id' => $request->pekerjaan,
                    'agama' => $request->agama,
                    'alamat' => $request->alamat,
                    'rt' => $request->rt,
                    'rw' => $request->rw,
                ]);
                
            });
            session()->forget('pending_kk');
            return redirect()->route('dataPenduduk')->with('success', 'Data berhasil disimpan.');

        }catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()
                ->with('error', $e->getMessage())
                ->withInput();
        }
    }
}

