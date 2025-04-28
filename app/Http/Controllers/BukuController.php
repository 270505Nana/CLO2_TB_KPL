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
    public function update(Request $request, $id)
    {
        // 1. Cari buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // 2. Update data buku
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'genre' => $request->genre,
        ]);

        // 3. Redirect atau kasih response
        return redirect('/databuku')->with('success', 'Data buku berhasil diupdate!');
    }

}


    // edit data buku
    public function edit($id)
{
    $buku = buku::findOrFail($id);
    return view('buku.edit', compact('buku'));
}


    // Function update untuk memperbarui data buku
    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer',
        'genre' => 'required|string|max:255',
    ]);

    $buku = buku::findOrFail($id);

    $buku->update([
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'genre' => $request->genre,
    ]);

    return redirect()->route('buku.show')->with('success', 'Data Buku Berhasil Diperbarui!');
}
}