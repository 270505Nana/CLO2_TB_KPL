<?php

namespace App\Traits;

trait HasFormattedAttributes
{
    // Format judul agar huruf pertama setiap kata kapital
    public function getFormattedJudul()
    {
        return ucwords(strtolower($this->judul));
    }
}
