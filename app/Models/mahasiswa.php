<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    Use HasFactory;
    protected $fillable = [
        'id_mahasiswa',
        'nama',
        'nim',
        'prodi',
        'fakultas',
        'angkatan',
        'nomor_hp',
    ];
}
