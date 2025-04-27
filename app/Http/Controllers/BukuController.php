<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\buku;

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
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'genre' => 'required|string|max:255',
        ]);

        buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'genre' => $request->genre,
        ]);

        return redirect()->back()->with('success', 'Data Buku Berhasil Disimpan!');
    }

    public function destroy($id)
    {
        try {
            $buku = buku::findOrFail($id);
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
}
