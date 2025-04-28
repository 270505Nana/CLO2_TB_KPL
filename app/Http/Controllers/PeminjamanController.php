<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Mahasiswa;
use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    // Menampilkan semua data peminjaman
    public function show()
    {
        $peminjamans = Peminjaman::all();
        return view('peminjaman.views', compact('peminjamans'));
    }

    // Menampilkan form tambah data peminjaman
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $buku = Buku::all();
        return view('peminjaman.form', compact('mahasiswa', 'buku'));
    }

    // Menyimpan data peminjaman baru
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'id_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        Peminjaman::create([
            'nim' => $request->nim,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);

        return redirect()->route('peminjaman.show')->with('success', 'Data peminjaman berhasil disimpan!');
    }

    // Menampilkan form edit data peminjaman
    public function edit($id)
{
    $peminjaman = Peminjaman::findOrFail($id); // Cari data berdasarkan ID
    $buku = Buku::all(); // Kalau kamu perlu data buku
    $mahasiswa = Mahasiswa::all(); // Kalau kamu perlu data mahasiswa
    return view('peminjaman.edit', compact('peminjaman', 'buku', 'mahasiswa'));
}


    // Mengupdate data peminjaman
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'id_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update([
            'nim' => $request->nim,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);

        return redirect()->route('peminjaman.show')->with('success', 'Data peminjaman berhasil diperbarui!');
    }

    // Menghapus data peminjaman
    public function destroy($id)
    {
        try {
            $peminjaman = Peminjaman::findOrFail($id);
            $peminjaman->delete();

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => 'Data peminjaman berhasil dihapus.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'message' => 'Data peminjaman tidak ditemukan!'
            ], 404);
        }
    }
}
