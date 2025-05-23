<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('peminjaman', function (Blueprint $table) {
        $table->bigInteger('nim'); // Menambahkan kolom nim bertipe bigInteger
    });
}

public function down()
{
    Schema::table('peminjaman', function (Blueprint $table) {
        $table->dropColumn('nim'); // Jika migration di-rollback, kolom nim akan dihapus
    });
}

};
