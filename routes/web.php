<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/mahasiswa', function () {
    $nim = [123,124,125,126];
    $nama= ['ibrahim','risky','satya','ali'];
    $noHP= ['08126012','08223122','081132443','081273647'];
    $alamat =['medan','siantar','aceh','siantar'];
    $jumlah = count($nim);
    return view('mahasiswa',compact('nim','jumlah','nama','noHP','alamat'));
});

