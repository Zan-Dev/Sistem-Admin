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

    public function searchKK(Request $request)
    {
        $query = $request->input('query');

        // Jika input kosong, jangan bebanin database
        if (empty($query)) {
            return response()->json([]);
        }

        $dataKK = KK::where(function($q) use ($query) {
                    $q->where('noKK', 'like', '%' . $query . '%');                  
                })
                ->with('kepalaKeluarga')
                ->limit(10)
                ->get();

        return response()->json($dataKK);
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
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',            
        ], [
            'required' => 'Field :attribute harus diisi.',            
        ]);

        try{
            DB::transaction(function () use ($validated, $noKK) {                                                
                $kk->update($validated);
            });

            return redirect()->route('dataKartuKeluarga')->with('success', 'Data Kartu Keluarga berhasil diperbarui!');
        }catch (\Exception $e){
            Log::error($e->getMessage());            
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function submit(Request $request)
    {
        $validated = request()->validate([
            'noKK' => 'required|unique:kk,noKK',           
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'tanggalDibuat' => 'required',
        ], [
            'required' => 'Field :attribute harus diisi.',
            'unique' => 'Nomor KK sudah ada.',  
        ]);

        try{
            DB::transaction(function () use ($validated) {
                // Validasi untuk memastikan Nomor KK belum terdaftar di database
                if(KK::where('noKK', $validated['noKK'])->exists()) {
                    throw new \Exception("Nomor KK sudah terdaftar di database.");
                }
                
                KK::create($validated);
            });

            return redirect()->route('dataKartuKeluarga')->with('success', 'Data Kartu Keluarga berhasil ditambahkan!');
        }catch (\Exception $e){
            Log::error($e->getMessage());        
            return redirect()->back()->with('error', $e->getMessage());        
        }
    }
    
}
