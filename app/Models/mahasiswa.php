<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    Use HasFactory;

    protected $primaryKey = 'nim';

    public $incrementing = false;

    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'fakultas',
        'angkatan',
        'nomor_hp',
    ];
    
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'nim', 'nim');
        // ibarat satu mahasiswa pasti punya banyak peminjaman atau buku yang dipinjam
    }
}

