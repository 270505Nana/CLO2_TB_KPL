<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/databuku', function () {
    return view('DataBuku');
});

Route::get('/tambahdatabuku', function () {
    return view('FormDataBuku');
});
Route::get('/datamahasiswa', function () {
    return view('DataMahasiswa');
});

Route::get('/tambahdatamahasiswa', function () {
    return view('FormDataMahasiswa');
});

Route::get('/datapeminjaman', function () {
    return view('DataPeminjaman');
});