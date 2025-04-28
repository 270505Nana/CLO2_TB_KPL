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

    // Mengupdate data peminjaman
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nim' => 'required|exists:mahasiswas,nim', 
                'id_buku' => 'required|exists:bukus,id',  
                'tanggal_pinjam' => 'required|date',
                'tanggal_kembali' => 'nullable|date',  
            ]);

            // Mencari peminjaman berdasarkan ID
            $peminjaman = Peminjaman::findOrFail($id);

            // Update data peminjaman
            $peminjaman->update([
                'nim' => $request->nim,
                'id_buku' => $request->id_buku,
                'tanggal_pinjam' => $request->tanggal_pinjam,
                'tanggal_kembali' => $request->tanggal_kembali,
            ]);

            // Kembalikan response sukses
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Data peminjaman berhasil diperbarui!',
                'data' => $peminjaman
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'code' => 422,
                'message' => 'Validasi gagal: ' . $e->getMessage()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'code' => 500,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
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
