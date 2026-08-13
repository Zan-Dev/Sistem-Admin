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
        return redirect()->route('dataPenduduk')->with('success', 'Data penduduk berhasil dihapus!');
    }

    function update(Request $request, $nik){        
        $validated = $request->validate([  
            'kkId' => 'required',
            'nama' => 'required|string|max:255',                        
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'statusPerkawinan' => 'required',
            'statusHubungan' => 'required',
            'statusHidup' => 'required',
            'tanggalMeninggal' => 'nullable|date',
            'jenisKelamin' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',            
        ], [
            'required' => 'Field :attribute harus diisi.',
            'date' => 'Field :attribute harus berupa tanggal yang valid.',
        ]);

        try {            
            DB::transaction(function () use ($validated, $nik) {                   
                $isKkIdExists = KK::where('noKK', $validated['kkId'])->exists();
                $hasDuplicateHead = Penduduk::where('kkId', $validated['kkId'])->where('statusHubungan', 'Kepala Keluarga')->where('nik', '!=', $nik)->exists();            
                // CEK APAKAH KK ID YANG DIPILIH ADA DI DATABASE
                if ($isKkIdExists) {
                    // CEK DUPLIKASI KEPALA KELUARGA DI KK YANG SAMA, KECUALI DIRI SENDIRI
                    if (!$hasDuplicateHead || ($hasDuplicateHead && $validated['statusHubungan'] != 'Kepala Keluarga')) {
                        $penduduk = Penduduk::find($nik);
                        $penduduk->update([
                            'kkId' => $validated['kkId'],
                            'nama' => $validated['nama'],                                    
                            'tempatLahir' => $validated['tempatLahir'],
                            'tanggalLahir' => $validated['tanggalLahir'],
                            'statusPerkawinan' => $validated['statusPerkawinan'],
                            'statusHubungan' => $validated['statusHubungan'],
                            'statusHidup' => $validated['statusHidup'],
                            'tanggalMeninggal' => $validated['tanggalMeninggal'] ? Carbon::parse($validated['tanggalMeninggal'])->format('Y-m-d') : null,
                            'jenisKelamin' => $validated['jenisKelamin'],
                            'kewarganegaraan' => $validated['kewarganegaraan'],
                            'pekerjaan_id' => $validated['pekerjaan'],
                            'agama' => $validated['agama'],
                        ]);                        
                    } else {
                        throw new \Exception("Sudah ada Kepala Keluarga untuk KK ID: " . $validated['kkId']);
                    }
                } else {
                    throw new \Exception("Nomor KK yang dipilih belum ada di database.");
                }                        
            });          
            return redirect()->route('dataPenduduk')->with('success', 'Data penduduk berhasil diperbarui!');  
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()
                ->with('error', $e->getMessage())
                ->withInput();
        }
    }

    public function submit(Request $request){        
        // 1. Validasi                   
        $request->validate([
            'nik'               => 'required|unique:penduduk,nik',
            'nama'              => 'required|string|max:255',
            'kkId'              => 'required',            
            'statusHubungan'    => 'required',
            'tempatLahir'       => 'required',
            'tanggalLahir'      => 'required|date',
            'agama'             => 'required',     
            'jenisKelamin'      => 'required',     
            'statusPerkawinan'  => 'required',
            'pekerjaan'         => 'required',       
            'kewarganegaraan'   => 'required',   
            // 'statusHidup'       => 'required|in:Hidup,Meninggal|default:Hidup',
            // 'tanggalMeninggal'  => 'nullable|date',                                      
        ], [
            'nik.unique' => 'NIK sudah terdaftar.',
            'required' => 'Field :attribute harus diisi.',
            'date' => 'Field :attribute harus berupa tanggal yang valid.',
        ]);    
        
        $isNikExists = Penduduk::where('nik', $request->nik)->exists();                
        $isKkIdExists = KK::where('noKK', $request->kkId)->exists();
        $hasDuplicateHead = Penduduk::where('kkId', $request->kkId)->where('statusHubungan', 'Kepala Keluarga')->exists();                                
        
        if(!$isKkIdExists && $request->kk_dummy_number !='1') {
            return redirect()->route('tambahPenduduk')
                ->withInput()
                ->with('confirm_dummy_kk', 'Nomor KK <b>'. $request->kkId . '</b> Belum Terdaftar di Database. <br>Simpan Sementara Dengan Nommor Dummy');
        }     

        try {
            DB::transaction(function () use ($request) {  
                $dummyKkId = '1000000000000001'; // Nomor KK dummy yang akan digunakan jika KK ID tidak ditemukan
                $isNikExists = Penduduk::where('nik', $request->nik)->exists();                
                $isKkIdExists = KK::where('noKK', $request->kkId)->exists();
                $hasDuplicateHead = Penduduk::where('kkId', $request->kkId)->where('statusHubungan', 'Kepala Keluarga')->exists();                                                         
                // 2. CEK DUPLIKASI NIK
                // CEK APAKAH SUDAH ADA NIK YANG SAMA DI DATABASE                
                if (!$isNikExists) {
                    $kk = $request->kkId;
                    if (!$isKkIdExists && $request->kk_dummy_number == '1') {
                        $kk = $dummyKkId;
                    }                    
                    // CEK DUPLIKASI KEPALA KELUARGA DI KK YANG SAMA
                    if(!$hasDuplicateHead || ($hasDuplicateHead && $request->statusHubungan != 'Kepala Keluarga') || ($hasDuplicateHead && $request->kk_dummy_number == '1')) {
                        Penduduk::create([
                            'nik'               => $request->nik,
                            'kkId'              => $kk,
                            'nama'              => $request->nama,                                                                    
                            'statusHubungan'    => $request->statusHubungan,                                                        
                            'tempatLahir'       => $request->tempatLahir,
                            'tanggalLahir'      => $request->tanggalLahir,                                
                            'agama'             => $request->agama,
                            'jenisKelamin'      => $request->jenisKelamin,                                
                            'statusPerkawinan'  => $request->statusPerkawinan,
                            'pekerjaan_id'      => $request->pekerjaan,
                            'kewarganegaraan'   => $request->kewarganegaraan,                                
                            'statusHidup'       => "Hidup", // ATUR DEFAULT STATUS HIDUP MENJADI "Hidup" SAAT PENAMBAHAN DATA PENDUDUK BARU
                            'tanggalMeninggal'  => null, // ATUR DEFAULT TANGGAL MENINGGAL MENJADI NULL SAAT PENAMBAHAN DATA PENDUDUK BARU
                        ]);
                    } elseif ($hasDuplicateHead && $request->statusHubungan == 'Kepala Keluarga') {
                        throw new \Exception("Sudah ada Kepala Keluarga untuk KK ID: " . $request->kkId);
                    }                                                                                  
                } else {
                    throw new \Exception("NIK sudah terdaftar di database.");
                }   
            });            
            return redirect()->route('dataPenduduk')->with('success', 'Data berhasil disimpan.');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()
                ->with('error', $e->getMessage())
                ->withInput();
        }
    }
}