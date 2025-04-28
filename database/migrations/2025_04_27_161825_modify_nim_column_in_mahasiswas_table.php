<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyNimColumnInMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            // Mengubah kolom 'nim' menjadi BIGINT
            $table->bigInteger('nim')->change();
        });
    }

    public function down()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            // Mengembalikan kolom 'nim' ke tipe data integer jika rollback
            $table->integer('nim')->change();
        });
    }
}
