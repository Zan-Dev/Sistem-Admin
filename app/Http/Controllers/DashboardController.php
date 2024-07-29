<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;

class DashboardController extends Controller
{
    public function showFormSKU()
    {
        $pekerjaan = Pekerjaan::all(); // Ambil semua data dari tabel 'items'
        return view('pages.dashboard.sku', compact('pekerjaan')); // Kirim data ke view 'form'
    }
}
