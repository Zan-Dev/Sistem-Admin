<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\UserController;

Route::group(['middleware' => 'Admin'], function(){    
});

Route::get('/', function () {
    return view('pages/dashboard/dashboard');
});

Route::get('/dataPenduduk', [PendudukController::class, 'dataPenduduk'])->name('dataPenduduk');
Route::get('/dataPenduduk/tambah', [PendudukController::class, 'add'])->name('tambahPenduduk');
Route::post('/dataPenduduk/submit', [PendudukController::class, 'submit'])->name('dataPenduduk.submit');
Route::get('/dataPenduduk/edit/{id}', [PendudukController::class, 'edit'])->name('dataPenduduk.edit');
Route::post('/dataPenduduk/update/{id}', [PendudukController::class, 'update'])->name('dataPenduduk.update');
Route::get('/dataPenduduk/delete/{id}', [PendudukController::class, 'delete'])->name('dataPenduduk.delete');

Route::get('/login', [SessionController::class, 'loginForm'])->name('login');
Route::post('/login', [SessionController::class, 'authenticate']);
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');


Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/users/tambah', [UserController::class, 'add'])->name('user.tambah');
Route::post('/users/submit', [UserController::class, 'submit'])->name('user.submit');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::get('/myprofile', function () {
    return view('pages/profile/my-profile');
});

Route::get('/sku', function () {
    return view('pages/dashboard/SKU');
});