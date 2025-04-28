<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/login', function () {
    return view('Login');
});

// =========================== BUKU ========================================================

// Menampilkan seluruh data buku
Route::get('/databuku', function () {
    return view('buku.views'); 
});

// Menampilkan form tambah buku
Route::get('/tambahdatabuku', function () {
    return view('buku.form');
});

//untuk mengupdate data buku
use App\Models\Buku;

Route::get('/editbuku/{id}', function ($id) {
    $buku = Buku::findOrFail($id); // cari buku berdasarkan id
    return view('buku.form', compact('buku'));
});


// =========================== MAHASISWA ========================================================
// Untuk menampilkan seluruh data mahasiswa dengan metode GET
// Mengarahkan ke mahasiswa controller dengan method show
Route::get('/datamahasiswa', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/tambahdatamahasiswa', function () {
    return view('mahasiswa/form');
});

Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
// post : mengirim data
// store : manggil dari controller
// terus ini itu simplenya sebut aja url nya buat routes /mahasiswa/routes artinya baris dibawah ini
// yang akan dieksekusi

// MahasiswaController::class, 'store' -> artinya di proses di controller mahasiswa dengan methodnya store
// mahasiswa.store itu buat nama routesnya


// =========================== PEMINJAMAN ========================================================
// Menampilkan seluruh data peminjaman
Route::get('/datapeminjaman', [PeminjamanController::class, 'show'])->name('peminjaman.show');

// Menampilkan form tambah peminjaman
Route::get('/tambahpeminjaman', [PeminjamanController::class, 'create'])->name('peminjaman.create');

// Menyimpan data peminjaman
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');

