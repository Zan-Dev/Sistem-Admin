<?php

use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/dashboard/dashboard');
});

Route::get('/datapenduduk', [PendudukController::class, 'tampil'])->name('data-penduduk');
Route::get('/datapenduduk/tambah', [PendudukController::class, 'tambah'])->name('tambah-penduduk');
Route::post('/datapenduduk/submit', [PendudukController::class, 'submit'])->name('datapenduduk.submit');
Route::get('/datapenduduk/edit/{id}', [PendudukController::class, 'edit'])->name('datapenduduk.edit');
Route::post('/datapenduduk/update/{id}', [PendudukController::class, 'update'])->name('datapenduduk.update');
Route::get('/datapenduduk/delete/{id}', [PendudukController::class, 'delete'])->name('datapenduduk.delete');

Route::get('/myprofile', function () {
    return view('pages/profile/my-profile');
});
