<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\Penduduk;
use App\Models\Pegawai;

class DashboardController extends Controller
{

    public function showDashboard(){
        return view('pages.dashboard.dashboard');
    }
    public function showFormSKU()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        $pegawai = Pegawai::all();
        return view('pages.dashboard.sku', compact('pekerjaan', 'penduduk', 'pegawai'));
    }

    public function showFormSP()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        $pegawai = Pegawai::all();
        return view('pages.dashboard.surat-pengantar', compact('pekerjaan', 'penduduk', 'pegawai'));
    }

    public function showFormSPMARMS()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.SPMARMS', compact('pekerjaan', 'penduduk'));
    }

    public function showFormPendaftaranAkta()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.pendaftaran-akta', compact('pekerjaan', 'penduduk'));
    }

    public function showFormSPTJMPasutri()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.sptjm-pasutri', compact('pekerjaan', 'penduduk'));
    }

    public function showFormSPTJMKelahiran()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.sptjm-kelahiran', compact('pekerjaan', 'penduduk'));
    }

    public function showFormPerubahanElemen()
    {
        $pekerjaan = Pekerjaan::all();
        $penduduk = Penduduk::all();
        return view('pages.dashboard.perubahan-elemen', compact('pekerjaan', 'penduduk'));
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
