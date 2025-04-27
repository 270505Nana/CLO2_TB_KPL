<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API UNTUK DATA MAHASISWA
Route::prefix('mahasiswa')->group(function () {
    Route::delete('/delete/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

// API UNTUK DATA BUKU
Route::prefix('buku')->group(function () {
    Route::get('/',[BukuController::class, 'show'])->name('buku.index');
    Route::post('/',[BukuController::class, 'store'])->name('buku.store');
    Route::delete('/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
});
