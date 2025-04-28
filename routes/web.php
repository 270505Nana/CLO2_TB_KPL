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

// Menyimpan data buku
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');

// Route untuk menampilkan form edit buku
Route::get('/editbuku/{id}', function ($id) {
    $buku = App\Models\buku::findOrFail($id);
    return view('buku.edit', compact('buku')); // Form untuk mengedit buku
})->name('buku.edit');

// Route untuk memperbarui data buku
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');


Route::get('/editbuku/{id}', function ($id) {
    $buku = Buku::findOrFail($id); // cari buku berdasarkan id
    return view('buku.form', compact('buku'));
});

// =========================== MAHASISWA ========================================================

Route::get('/datamahasiswa', function () {
    return view('mahasiswa.views'); 
});
Route::get('/tambahdatamahasiswa', function () {
    return view('mahasiswa.form');
});

Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
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

Route::get('/datapeminjaman', function () {
    return view('DataPeminjaman');
});

// Route untuk menampilkan form edit mahasiswa
Route::get('/editmahasiswa/{nim}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// Route untuk update data mahasiswa
Route::put('/updatedatamahasiswa/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');





