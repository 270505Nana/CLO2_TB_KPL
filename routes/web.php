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

// post : mengirim data
// store : manggil dari controller
// terus ini itu simplenya sebut aja url nya buat routes /mahasiswa/routes artinya baris dibawah ini
// yang akan dieksekusi

// MahasiswaController::class, 'store' -> artinya di proses di controller mahasiswa dengan methodnya store
// mahasiswa.store itu buat nama routesnya
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');


// =========================== PEMINJAMAN ========================================================
// Menampilkan seluruh data peminjaman
Route::get('/datapeminjaman', [PeminjamanController::class, 'show'])->name('peminjaman.show');

// Menampilkan form tambah peminjaman
Route::get('/tambahpeminjaman', [PeminjamanController::class, 'create'])->name('peminjaman.create');

// Menyimpan data peminjaman
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');

