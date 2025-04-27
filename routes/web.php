<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/login', function () {
    return view('Login');
});

// =========================== BUKU ========================================================
// Menampilkan seluruh data buku
Route::get('/databuku', [BukuController::class, 'show'])->name('buku.show');

// Menampilkan form tambah buku
Route::get('/tambahdatabuku', function () {
    return view('buku/form'); // Form tambah buku
});

// Menyimpan data buku
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');



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

Route::delete('/deletemahasiswa/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/datapeminjaman', function () {
    return view('DataPeminjaman');
});