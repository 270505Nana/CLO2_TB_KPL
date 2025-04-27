<?php

namespace App\Traits;

trait ValidatesData
{
    // Validasi data mahasiswa
    public static function validateMahasiswaData($data)
    {
        return validator($data, [
            'nama' => 'required|string|max:255',
            'nim' => 'required|integer|unique:mahasiswas,nim',
            'prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'angkatan' => 'required|integer',
            'nomor_hp' => 'required|numeric',
        ]);
    }
}
