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

// Route untuk menampilkan form edit buku
Route::get('/editbuku/{id}', function ($id) {
    $buku = App\Models\buku::findOrFail($id);
    return view('buku.edit', compact('buku')); // Form untuk mengedit buku
})->name('buku.edit');

// Route untuk memperbarui data buku
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');




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

Route::get('/datapeminjaman', function () {
    return view('DataPeminjaman');
});

// Route untuk menampilkan form edit mahasiswa
Route::get('/editmahasiswa/{nim}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// Route untuk update data mahasiswa
Route::put('/updatedatamahasiswa/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');





