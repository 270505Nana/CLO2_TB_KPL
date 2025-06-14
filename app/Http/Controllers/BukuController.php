<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // Function show untuk menampilkan semua buku
    public function show()
    {
        try {
            $dataBuku = Buku::all();

            if ($dataBuku->isEmpty()) {
                return response()->json([
                    'code' => 404,
                    'status' => 'empty',
                    'message' => 'Tidak ada data buku tersedia.'
                ], 404);
            }

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $dataBuku
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => 'Gagal mengambil data buku.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Function store untuk menyimpan data buku baru
    public function store(Request $request)
    {
        try {
            // Validasi data
            $request->validate([ //penerapan defensive programming
                'judul' => 'required|string|max:255',
                'penulis' => 'required|string|max:255',
                'penerbit' => 'required|string|max:255',
                'tahun_terbit' => 'required|integer',
                'genre' => 'required|string|max:255',
            ]);

            // Membuat data buku baru
            $buku = Buku::create([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
                'genre' => $request->genre,
            ]);

            return response()->json([
                'status' => 'success',
                'code' => 200,
                'data' => $buku,
                'redirect' => route('buku.index')
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mengembalikan validasi error
            return response()->json([
                'status' => 'error',
                'code' => 422,
                'message' => 'Validasi gagal: ' . $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            // Mengembalikan respon error
            return response()->json([
                'status' => 'error',
                'code' => 500,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    //untuk menghapus data buku berdasarkan id
    public function destroy($id)
    {
        try {
            $buku = Buku::findOrFail($id);
            $buku->delete();

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'messages' => 'Data Buku Berhasil Dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'messages' => 'Data Buku tidak ditemukan!'
            ], 404);
        }
    }

    // untuk menampilkan form edit buku
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);

        return view('Buku.edit', compact('buku'));
    }

    // untuk update data buku
    public function update(Request $request, $id)
    {
        try {
            // Validasi data
            $request->validate([
                'judul' => 'required|string|max:255',
                'penulis' => 'required|string|max:255',
                'penerbit' => 'required|string|max:255',
                'tahun_terbit' => 'required|integer',
                'genre' => 'required|string|max:255',
            ]);

            // Cari buku berdasarkan ID
            $buku = Buku::findOrFail($id);

            // Update data buku
            $buku->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
                'genre' => $request->genre,
            ]);

            // Beri response sukses
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Data buku berhasil diupdate!',
                'data' => $buku,
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

}


