<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Buku;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'dashboard']);

// =========================== BUKU ========================================================

// Menampilkan seluruh data buku
Route::get('/databuku', function () {
    return view('buku.views'); 
});

// Menampilkan form tambah buku
Route::get('/tambahdatabuku', function () {
    return view('buku.form');
});



// =========================== MAHASISWA ========================================================

// Menampilkan seluruh data mahasiswa
Route::get('/datamahasiswa', function () {

    return view('mahasiswa.views'); 
});

// Menampilkan form tambah mahasiswa
Route::get('/tambahdatamahasiswa', function () {
    return view('mahasiswa.form');
})->name('tambah.mahasiswa');


// =========================== PEMINJAMAN ========================================================

// Menampilkan seluruh data peminjaman
Route::get('/datapeminjaman', [PeminjamanController::class, 'show']);


