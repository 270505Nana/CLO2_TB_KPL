<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasMahasiswaAndBukuRelations; // Pastikan trait diimpor dengan benar

class peminjaman extends Model
{
    use HasFactory, HasMahasiswaAndBukuRelations; // Menggunakan trait

    protected $fillable = [
        'nim',
        'id_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];
}
