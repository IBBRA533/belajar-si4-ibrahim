<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/profil', function () {
    return view('profil');
});


Route::resource('mahasiswa',MahasiswaController::class);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
