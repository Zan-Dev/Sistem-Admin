<?php

namespace App\Http\Controllers;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
 
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

    function edit($id){
        $penduduk = Penduduk::find($id);
        $pekerjaan = Pekerjaan::all();
        return view('pages.penduduk.edit-penduduk', compact('penduduk', 'pekerjaan'));
    }

    function delete($id){
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
        return redirect()->route('dataPenduduk');
    }

    function update(Request $request, $id){

        $validated = $request->validate([            
            'nama' => 'required',
            'noKK' => 'required',
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
        

        $penduduk = Penduduk::findOrfail($id);

        $penduduk->update($validated);

        return redirect()->route('dataPenduduk')->with('success', 'Data penduduk berhasil diperbarui!');
    }

    function submit(Request $request){         

        $customMessages = [            
            'nik.unique' => 'NIK sudah ada',
            // tambahkan pesan kesalahan kustom lainnya jika perlu
        ];

        $request->validate([
            'nik' => 'required|unique:penduduk,nik',            
        ], $customMessages);

        $penduduk = new Penduduk();        
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->noKK = $request->noKK;
        $penduduk->tempatLahir = $request->tempatLahir;
        $penduduk->tanggalLahir = $request->tanggalLahir;
        $penduduk->statusPerkawinan = $request->statusPerkawinan;
        $penduduk->jenisKelamin = $request->jenisKelamin;
        $penduduk->kewarganegaraan = $request->kewarganegaraan;
        $penduduk->pekerjaan_id = $request->pekerjaan;
        $penduduk->agama = $request->agama;
        $penduduk->alamat = $request->alamat;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->save();

        return redirect()->route('dataPenduduk');
        // return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

