<?php

namespace App\Models; // Namespace yang benar

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';

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
    }
}
