<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\KartuKeluargaKontroller;

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'loginForm'])->name('login');
    Route::post('/login', [SessionController::class, 'authenticate']);
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware('Admin')->group(function () {

        /*
        | Data Penduduk
        */
        Route::prefix('data-penduduk')->controller(PendudukController::class)->group(function () {

            Route::get('/', 'dataPenduduk')->name('dataPenduduk');
            Route::get('/tambah', 'add')->name('tambahPenduduk');
            Route::post('/submit', 'submit')->name('dataPenduduk.submit');

            Route::get('/edit/{id}', 'edit')->name('dataPenduduk.edit');
            Route::put('/update/{id}', 'update')->name('dataPenduduk.update');

            Route::delete('/delete/{id}', 'delete')->name('dataPenduduk.delete');

        });

        /*        
        | Data Kartu Keluarga
        */
        Route::prefix('kartu-keluarga')->controller(KartuKeluargaKontroller::class)->group(function () {
            Route::get('/', 'dataKartuKeluarga')->name('dataKartuKeluarga');
            Route::get('/tambah', 'add')->name('tambahKartuKeluarga');
            Route::post('/submit', 'submit')->name('dataKartuKeluarga.submit');
        });

        /*
        | Users Management
        */
        Route::prefix('users')->controller(UserController::class)->group(function () {

            Route::get('/', 'users')->name('users');
            Route::get('/tambah', 'add')->name('user.tambah');
            Route::post('/submit', 'submit')->name('user.submit');

            Route::post('/update/{id}', 'update')->name('user.update');
            Route::post('/change-password/{id}', 'changePassword')->name('changePassword');

            Route::delete('/delete/{id}', 'delete')->name('user.delete');

        });

        /*
        | Autofill Penduduk
        */
        Route::get('/get-penduduk', [DashboardController::class, 'getPendudukByNik'])
            ->name('autofill');

    });

    /*
    |--------------------------------------------------------------------------
    | Dashboard Forms
    |--------------------------------------------------------------------------
    */

    Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {

        Route::get('/surat-keterangan-usaha', 'showFormSKU')->name('sku');
        Route::get('/surat-pengantar', 'showFormSP')->name('sp');

        Route::get('/sptjm-pasutri', 'showFormSPTJMPasutri')->name('sptjmPasutri');
        Route::get('/sptjm-kelahiran', 'showFormSPTJMKelahiran')->name('sptjmKelahiran');

        Route::get('/spmarms-kelahiran', 'showFormSPMARMS')->name('spmarms');
        Route::get('/pendaftaran-akta', 'showFormPendaftaranAkta')->name('pendaftaranAkta');

        Route::get('/perubahan-elemen', 'showFormPerubahanElemen')->name('perubahanElemen');

    });

    /*
    |--------------------------------------------------------------------------
    | Generate PDF
    |--------------------------------------------------------------------------
    */

    Route::controller(PdfController::class)->group(function () {

        Route::post('/sku-download', 'generateSKU')->name('skuDownload');
        Route::post('/surat-pengantar-download', 'generateSP')->name('SuratPengantarDownload');

        Route::post('/sptjm-pasutri-download', 'generateSPTJMPasutri')->name('SPTJMPasutriDownload');
        Route::post('/sptjm-kelahiran-download', 'generateSPTJMKelahiran')->name('SPTJMKelahiranDownload');

        Route::post('/spmarms-download', 'generateSPMARMS')->name('SPMARMSDownload');

        Route::post('/pendaftaran-akta-download', 'generatePendaftaranAkta')->name('PendaftaranAktaDownload');
        Route::post('/perubahan-elemen-download', 'generatePerubahanElemen')->name('PerubahanElemenDownload');

    });

    /*
    |--------------------------------------------------------------------------
    | Profile & Logout
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

});


/*
|--------------------------------------------------------------------------
| Testing / Development
|--------------------------------------------------------------------------
*/

Route::get('/surat-pengantar-view', [PdfController::class, 'generatePDF'])
    ->name('surat-pengantar');

Route::view('/pages/ocr', 'pages.ocr')->name('ocr');
Route::view('/document', 'pages.ocr')->name('document.view');

Route::post('/document/read', [DocumentController::class, 'read'])
    ->name('document.read');