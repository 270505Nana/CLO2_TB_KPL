<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    Use HasFactory;
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'genre'
    ];

    public function peminjaman(){
        return $this->hasOne(peminjaman::class);
        // ibarat in one flight must has a many seats right? not only ine but more than one.
    }
}
