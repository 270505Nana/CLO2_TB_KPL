<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'dashboard']);

// Route::get('/login', function () {
//     return view('Login');
// });

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

Route::get('/datamahasiswa', function () {
    return view('mahasiswa.views'); 
});
Route::get('/tambahdatamahasiswa', function () {
    return view('mahasiswa.form');
});

Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');


// =========================== PEMINJAMAN ========================================================
// Menampilkan seluruh data peminjaman
Route::get('/datapeminjaman', [PeminjamanController::class, 'show'])->name('peminjaman.show');

// Menampilkan form tambah peminjaman
Route::get('/tambahpeminjaman', [PeminjamanController::class, 'create'])->name('peminjaman.create');

// Menyimpan data peminjaman
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');

// Menampilkan form edit peminjaman
Route::get('/editpeminjaman/{id}', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');

// Melakukan update peminjaman
Route::put('/editpeminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
