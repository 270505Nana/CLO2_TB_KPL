<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API UNTUK DATA MAHASISWA
Route::prefix('mahasiswa')->group(function () {
    Route::delete('/delete/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});
