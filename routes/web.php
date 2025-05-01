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
})->name('buku.index');

// Menampilkan form tambah buku
Route::get('/tambahdatabuku', function () {
    return view('buku.form');
});

// Menampilkan form edit buku
Route::get('/editbuku/{id}', [BukuController::class, 'edit'])->name('buku.edit');

// =========================== MAHASISWA ========================================================

// Menampilkan seluruh data mahasiswa
Route::get('/datamahasiswa', function () {
    return view('mahasiswa.views'); 
})->name('data.mahasiswa');

// Menampilkan form tambah mahasiswa
Route::get('/tambahdatamahasiswa', function () {
    return view('mahasiswa.form');
})->name('tambah.mahasiswa');

// Menampilkan form edit mahasiswa
Route::get('/editmahasiswa/{nim}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// =========================== PEMINJAMAN ========================================================

Route::get('/datapeminjaman', function () {
    return view('peminjaman.views'); 
})->name('data.peminjaman');

Route::get('/tambahpeminjaman', function () {
    return view('peminjaman.form');
})->name('tambah.peminjaman');

Route::get('/editpeminjaman/{id}', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');