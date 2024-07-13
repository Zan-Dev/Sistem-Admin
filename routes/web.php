<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/dashboard/dashboard');
});

Route::get('/sourcedata', function () {
    return view('pages/source data/source-data');
});