<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id_peminjaman();
            $table->foreignID('id_mahasiswa')-> references ('id_mahasiswa') -> on('Flight_classes') -> onDelete('cascade');
            $table->id_peminjaman();
            $table->id_peminjaman();
            $table->id_peminjaman();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
