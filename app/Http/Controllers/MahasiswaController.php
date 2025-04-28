<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Function show untuk meng get data
    public function show()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.views', compact('mahasiswas'));
    }

    // Membuat function untuk store data alias mengirim data
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
        return redirect()->back()->with('success', 'Data Mahasiswa Berhasil Disimpan!');
    }

    // Fungsi untuk menampilkan form edit data mahasiswa
    public function edit($nim)
    {
        // Ambil data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($nim);

        // Tampilkan form untuk edit data mahasiswa
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Fungsi untuk mengupdate data mahasiswa
    public function update(Request $request, $nim)
{
    // Ambil data mahasiswa berdasarkan NIM
    $mahasiswa = Mahasiswa::where('nim', $nim)->first();

    // Cek jika mahasiswa tidak ditemukan
    if (!$mahasiswa) {
        return redirect()->route('mahasiswa.index')->with('error', 'Mahasiswa tidak ditemukan!');
    }

    // Validasi dan update data mahasiswa
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|numeric',
        'fakultas' => 'required|string|max:255',
        'prodi' => 'required|string|max:255',
        'angkatan' => 'required|numeric',
        'nomor_hp' => 'required|numeric',
    ]);

    $mahasiswa->update($validatedData);

    // Redirect atau tampilkan pesan sukses
    return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diupdate!');
}

}