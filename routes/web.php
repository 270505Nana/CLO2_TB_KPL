<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/databuku', function () {
    return view('buku/views');
});

Route::get('/tambahdatabuku', function () {
    return view('FormDataBuku');
});
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/datamahasiswa', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/tambahdatamahasiswa', function () {
    return view('mahasiswa/form'); 
});

Route::get('/editmahasiswa/{nim}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/updatemahasiswa/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');


Route::get('/datapeminjaman', function () {
    return view('DataPeminjaman');
});