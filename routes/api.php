<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Peminjaman;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// API UNTUK DATA MAHASISWA
Route::prefix('mahasiswa')->group(function () {
    Route::get('/',[MahasiswaController::class, 'show'])->name('mahasiswa.index');
    Route::post('/',[MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::put('/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/delete/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

// API UNTUK DATA BUKU
Route::prefix('buku')->group(function () {
    Route::get('/',[BukuController::class, 'show'])->name('buku.index');
    Route::post('/',[BukuController::class, 'store'])->name('buku.store');
    Route::put('/{id}', [BukuController::class, 'update'])->name('buku.update'); 
    Route::delete('/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
});

// API UNTUK DATA PEMINJAMAN
Route::prefix('peminjaman')->group(function () {
    Route::get('/',[PeminjamanController::class, 'show'])->name('peminjaman.index');
    Route::post('/',[PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::put('/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update'); 
    Route::delete('/delete/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
});