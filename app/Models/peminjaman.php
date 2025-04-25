<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class peminjaman extends Model
{
    Use HasFactory;
    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali'
    ];

    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class);
        // dalam suatu penerbangan pasti ada jumlah kursinya, jadi ini belongsto flight info penerbangan
        
    }
    
    public function buku(){
        return $this->belongsTo(buku::class);
        // dalam suatu penerbangan pasti ada jumlah kursinya, jadi ini belongsto flight info penerbangan
        
    }
}
