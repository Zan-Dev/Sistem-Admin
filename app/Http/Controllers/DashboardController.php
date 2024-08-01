<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\Penduduk;

class DashboardController extends Controller
{
    public function showFormSKU()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.sku', compact('pekerjaan', 'penduduk'));
    }

    public function showFormSP()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.surat-pengantar', compact('pekerjaan', 'penduduk'));
    }

    public function showFormSPTJMPasutri()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.sptjm-pasutri', compact('pekerjaan', 'penduduk'));
    }


    public function getPendudukByNik(Request $request)
    {        
        $nik = $request->input('nik');
        $penduduk = Penduduk::where('nik', $nik)->first();

        if ($penduduk) {
            return response()->json($penduduk);
        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
    }

}
