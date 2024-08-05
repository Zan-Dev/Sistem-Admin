<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

    Route::get('/dataPenduduk', [PendudukController::class, 'dataPenduduk'])->name('dataPenduduk');
    Route::get('/dataPenduduk/tambah', [PendudukController::class, 'add'])->name('tambahPenduduk');
    Route::post('/dataPenduduk/submit', [PendudukController::class, 'submit'])->name('dataPenduduk.submit');
    Route::get('/dataPenduduk/edit/{id}', [PendudukController::class, 'edit'])->name('dataPenduduk.edit');
    Route::post('/dataPenduduk/update/{id}', [PendudukController::class, 'update'])->name('dataPenduduk.update');
    Route::get('/dataPenduduk/delete/{id}', [PendudukController::class, 'delete'])->name('dataPenduduk.delete');   

    Route::get('/surat-keterangan-usaha', [DashboardController::class, 'showFormSKU'])->name('sku');
    Route::get('/surat-pengantar', [DashboardController::class, 'showFormSP'])->name('sp');
    Route::get('/sptjm-pasutri', [DashboardController::class, 'showFormSPTJMPasutri'])->name('sptjmPasutri');
    Route::get('/sptjm-kelahiran', [DashboardController::class, 'showFormSPTJMKelahiran'])->name('sptjmKelahiran');
    Route::get('/spmarms-kelahiran', [DashboardController::class, 'showFormSPMARMS'])->name('spmarms');
    Route::get('/pendaftaran-akta', [DashboardController::class, 'showFormPendaftaranAkta'])->name('pendaftaranAkta');
    Route::get('/perubahan-elemen', [DashboardController::class, 'showFormPerubahanElemen'])->name('perubahanElemen');

    // Generate PDF
    Route::post('/SKU-download', [PdfController::class, 'generateSKU'])->name('skuDownload');
    Route::post('/surat-pengantar-download', [PdfController::class, 'generateSP'])->name('SuratPengantarDownload');
    Route::post('/sptjm-pasutri-download', [PdfController::class, 'generateSPTJMPasutri'])->name('SPTJMPasutriDownload');
    Route::post('/sptjm-Kelahiran-download', [PdfController::class, 'generateSPTJMKelahiran'])->name('SPTJMKelahiranDownload');
    Route::post('/SPMARMS-download', [PdfController::class, 'generateSPMARMS'])->name('SPMARMSDownload');
    Route::post('/pendaftaran-akta-download', [PdfController::class, 'generatePendaftaranAkta'])->name('PendaftaranAktaDownload');
    Route::post('/perubahan-elemen-download', [PdfController::class, 'generatePerubahanElemen'])->name('PerubahanElemenDownload');

    Route::get('/users', [UserController::class, 'users'])
        ->name('users')->middleware('Admin');
    Route::get('/users/tambah', [UserController::class, 'add'])
        ->name('user.tambah')->middleware('Admin');;
    Route::post('/users/submit', [UserController::class, 'submit'])
        ->name('user.submit')->middleware('Admin');;
    Route::post('/users/update/{id}', [UserController::class, 'update'])
        ->name('user.update')->middleware('Admin');;
    Route::post('/users/changePassword/{id}', [UserController::class, 'changePassword'])
        ->name('changePassword')->middleware('Admin');;
    Route::get('/users/delete/{id}', [UserController::class, 'delete'])
        ->name('user.delete')->middleware('Admin');;
    Route::get('/myprofile', [UserController::class, 'profile'])->name('profile');

    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});

Route::get('/login', [SessionController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'authenticate']);





// try & test
Route::get('/surat-pengantar-view', [PdfController::class, 'generatePDF'])->name('surat-pengantar');
Route::get('/get-penduduk', [DashboardController::class, 'getPendudukByNik'])->name('autofill');