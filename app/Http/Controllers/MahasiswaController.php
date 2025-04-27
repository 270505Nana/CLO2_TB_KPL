<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa; 

class MahasiswaController extends Controller
{
    // Function show untuk meng get data
    // public function show()
    // {
    //     $mahasiswas = Mahasiswa::all();
    //     return view('mahasiswa.views', compact('mahasiswas'));
    // }

    public function show()
    {
        try {
            $mahasiswas = Mahasiswa::all();

            if ($mahasiswas->isEmpty()) {
                return response()->json([
                    'code' => 404,
                    'status' => 'empty',
                    'message' => 'Tidak ada mahasiswa yang terdaftar, coba tambah data dulu ya cantik.'
                ], 404);
            }

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $mahasiswas
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => 'Gagal mengambil data mahasiswa.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    //membuat function untuk store data alias mengirim data
    public function store(Request $request)
    {
        // Validasi data (opsional, tapi penting biar datanya bener)
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|integer|unique:mahasiswas,nim',
            'prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'angkatan' => 'required|integer',
            'nomor_hp' => 'required|numeric',
        ]);

        // Simpan data ke database
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'angkatan' => $request->angkatan,
            'nomor_hp' => $request->nomor_hp,
        ]);

        // Redirect atau kasih feedback ke user
        return redirect()->route('mahasiswa.show')->with('success', 'Data Mahasiswa Berhasil Disimpan!');
    }
    //delete mahasiswa 
    public function destroy($nim)
    {
        try {
            $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
            $mahasiswa->delete();
    
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'messages' => 'Data Mahasiswa Berhasil Dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'messages' => 'Data Mahasiswa tidak ditemukan!'
            ], 404);
        }
    }
    
}
