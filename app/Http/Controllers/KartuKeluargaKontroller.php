<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KK;
use App\Models\Penduduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class KartuKeluargaKontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dataKartuKeluarga()
    {        
        $dataKK = KK::with('kepalaKeluarga')->get();                       
        return view('pages.kartu-keluarga.data-kartu-keluarga', compact('dataKK'));
    }

    public function add()
    {
        return view('pages.kartu-keluarga.tambah-kartu-keluarga');
    }

    public function edit($id)
    {
        $kk = KK::find($id);
        return view('pages.kartu-keluarga.edit-kartu-keluarga', compact('kk'));
    }

    public function delete($id)
    {
        $kk = KK::find($id);
        $kk->delete();
        return redirect()->route('dataKartuKeluarga')->with('success', 'Data Kartu Keluarga berhasil dihapus!');
    }

    public function update(Request $request, $noKK)
    {
        $validated = request()->validate([
            'noKK' => 'required|unique:kk,noKK, '.$noKK.',noKK',
            'nikKepalaKeluarga' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ], [
            'required' => 'Field :attribute harus diisi.',
            'unique' => 'Nomor KK sudah ada.',
        ]);

        try{
            DB::transaction(function () use ($validated, $noKK) {
                if(Penduduk::where('nik', $validated['nikKepalaKeluarga'])->doesntExist()){                                        
                    throw new \Exception("NIK Kepala Keluarga Belum Terdaftar di Database");                       
                }
                
                $kk = KK::findOrFail($noKK);
                $kk->update($validated);
            });

            return redirect()->route('dataKartuKeluarga')->with('success', 'Data Kartu Keluarga berhasil diperbarui!');
        }catch (\Exception $e){
            Log::error($e->getMessage());
            session()->put('pending_kk', [
                'nik'    => $validated['nikKepalaKeluarga'],
                'kkId'   => $validated['noKK'],
                'alamat' => $validated['alamat'],
                'rt'     => $validated['rt'],
                'rw'     => $validated['rw'],
            ]);

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function submit(Request $request)
    {
        $validated = request()->validate([
            'noKK' => 'required|unique:kk,noKK',
            'nikKepalaKeluarga' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ], [
            'required' => 'Field :attribute harus diisi.',
            'unique' => 'Nomor KK sudah ada.',
        ]);

        try{
            DB::transaction(function () use ($validated) {
                if(Penduduk::where('nik', $validated['nikKepalaKeluarga'])->doesntExist()){                                        
                    throw new \Exception("NIK Kepala Keluarga Belum Terdaftar di Database");                       
                }
                else if(KK::where('nikKepalaKeluarga', $validated['nikKepalaKeluarga'])->exists()){
                    throw new \Exception('NIK Kepala Keluarga sudah terdaftar sebagai kepala keluarga lain.');  
                } 
                else if(Penduduk::where('nik', $validated['nikKepalaKeluarga'])->whereHas('kk')->exists()){
                    throw new \Exception('NIK Kepala Keluarga sudah terdaftar sebagai anggota keluarga lain.');  
                }
                KK::create($validated);
            });

            return redirect()->route('dataKartuKeluarga')->with('success', 'Data Kartu Keluarga berhasil ditambahkan!');
        }catch (\Exception $e){
            Log::error($e->getMessage());
            session()->put('pending_kk', [
                'nik'    => $validated['nikKepalaKeluarga'],
                'kkId'   => $validated['noKK'],
                'alamat' => $validated['alamat'],
                'rt'     => $validated['rt'],
                'rw'     => $validated['rw'],
            ]);

            return redirect()->back()->with('error', $e->getMessage());
            // return redirect()->back()
            //     ->with('error', $e->getMessage())
            //     ->withInput();
        }
    }
    
}
