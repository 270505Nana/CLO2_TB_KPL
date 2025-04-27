<?php

namespace App\Traits;

use App\Models\Buku;  // Pastikan kelas Buku diimpor dengan benar
use App\Models\Mahasiswa;  // Jangan lupa import Mahasiswa juga

trait HasMahasiswaAndBukuRelations
{
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
