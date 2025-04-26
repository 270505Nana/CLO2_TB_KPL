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