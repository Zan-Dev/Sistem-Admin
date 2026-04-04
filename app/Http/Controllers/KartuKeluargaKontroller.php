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

    /**
     * Show the form for creating a new resource.
     */
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
                else{
                    throw new \Exception('NIK Kepala Keluarga sudah terdaftar sebagai penduduk.');
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
