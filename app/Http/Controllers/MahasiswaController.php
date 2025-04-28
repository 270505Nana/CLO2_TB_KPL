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
        return redirect()->back()->with('success', 'Data Mahasiswa Berhasil Disimpan!');
    }

    public function edit($nim)
    {
        $mhs = Mahasiswa::where('nim', $nim)->firstOrFail();
    
        return view('mahasiswa.edit', compact('mhs'));
    }

    // UPDATE DATA
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'angkatan' => 'required|integer',
            'nomor_hp' => 'required|numeric',
        ]);

        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'angkatan' => $request->angkatan,
            'nomor_hp' => $request->nomor_hp,
        ]);

        return redirect()->route('mahasiswa.show')->with('success', 'Data berhasil diupdate!');
    }

}
