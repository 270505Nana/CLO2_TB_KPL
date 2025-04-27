<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Mahasiswa;
use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    // Menampilkan data peminjaman
    public function show()
    {
        $peminjamans = Peminjaman::all();
        return view('peminjaman.views', compact('peminjamans'));
    }

     // Menampilkan form tambah peminjaman
     public function create()
     {
         $mahasiswa = Mahasiswa::all(); // Ambil data mahasiswa
         $buku = Buku::all(); // Ambil data buku
         return view('peminjaman.form', compact('mahasiswa', 'buku')); // Kirim data mahasiswa dan buku ke view
     }
 
     // Menyimpan data peminjaman
     public function store(Request $request)
     {
         // Validasi input dari form
         $request->validate([
             'nim' => 'required',
             'id_buku' => 'required',
             'tanggal_pinjam' => 'required|date',
             'tanggal_kembali' => 'required|date',
         ]);
 
         // Simpan data peminjaman ke database
         Peminjaman::create([
            'nim' => $request->nim,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);
 
         // Redirect ke halaman peminjaman dengan pesan sukses
         return redirect()->route('peminjaman.show')->with('success', 'Data peminjaman berhasil disimpan!');
     }
 }