<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    Use HasFactory;
    protected $fillable = [
        'id_buku',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'genre'
    ];
}
