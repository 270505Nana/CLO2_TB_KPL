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
    try {
        // Validasi data
        $request->validate([
            'nim' => 'required|numeric|digits_between:10,20|unique:mahasiswas,nim',// sudah menerapkan defensive programming
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:1900|max:' . date('Y'),
            'nomor_hp' => 'required|string|max:20',
        ]);

        // Membuat data mahasiswa baru
        $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'angkatan' => $request->angkatan,
            'nomor_hp' => $request->nomor_hp,
        ]);

        // Kembalikan response sukses
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'data' => $mahasiswa,            
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
