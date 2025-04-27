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
    $dataBuku = buku::all();
    return view('buku.views', compact('dataBuku'));
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
}
