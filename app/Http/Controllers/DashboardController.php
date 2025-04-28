<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $bukus = Buku::all(); // ambil semua data buku

        $jumlahBuku = Buku::count(); // hitung jumlah baris di tabel buku
        $jumlahMahasiswa = Mahasiswa::count(); // hitung jumlah baris di tabel mahasiswa
        $jumlahPeminjam = Peminjaman::count();

        return view('Dashboard', compact('bukus', 'jumlahBuku', 'jumlahMahasiswa', 'jumlahPeminjam'));
    }
}