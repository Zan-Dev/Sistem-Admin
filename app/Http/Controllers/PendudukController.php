<?php

namespace App\Http\Controllers;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PendudukController extends Controller
{
    function tampil(){
        $penduduk = Penduduk::get();
        return view('pages.penduduk.data-penduduk', compact('penduduk'));
    }

    function tambah(){
        return view('pages.penduduk.tambah-penduduk');
    }

    function edit($id){
        $penduduk = Penduduk::find($id);
        return view('pages.penduduk.edit-penduduk', compact('penduduk'));
    }

    function delete($id){
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
        return redirect()->route('data-penduduk');
    }

    function update(Request $request, $id){
        $penduduk = Penduduk::find($id);
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->noKK = $request->noKK;
        $penduduk->tempatLahir = $request->tempatLahir;
        $penduduk->ttl = $request->ttl;
        $penduduk->statusPerkawinan = $request->statusPerkawinan;
        $penduduk->jenisKelamin = $request->jenisKelamin;
        $penduduk->alamat = $request->alamat;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->save();

        return redirect()->route('data-penduduk');
    }

    function submit(Request $request){        
        $penduduk = new Penduduk();
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->noKK = $request->noKK;
        $penduduk->tempatLahir = $request->tempatLahir;
        $penduduk->ttl = $request->ttl;
        $penduduk->statusPerkawinan = $request->statusPerkawinan;
        $penduduk->jenisKelamin = $request->jenisKelamin;
        $penduduk->alamat = $request->alamat;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->save();

        return redirect()->route('data-penduduk');
        // return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

