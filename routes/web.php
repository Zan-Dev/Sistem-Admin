<?php

use App\Models\Resident;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/dashboard/dashboard');
});

Route::get('/sourcedata', function () {
    return view('pages/source data/source-data', ['residents' => Resident::all()]);
});

Route::get('/tambahwarga', function () {
    return view('pages/source data/tambah-warga');
});

Route::get('/editwarga', function () {
    return view('pages/source data/edit-warga');
});


Route::get('/myprofile', function () {
    return view('pages/profile/my-profile');
});