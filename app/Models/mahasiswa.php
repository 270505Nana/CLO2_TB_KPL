<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    Use HasFactory;
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'fakultas',
        'angkatan',
        'nomor_hp',
    ];

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
        // ibarat in one flight must has a many seats right? not only ine but more than one.
    }
}

