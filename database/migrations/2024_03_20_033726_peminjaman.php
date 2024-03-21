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
        Schema::create('peminjaman', function (Blueprint $peminjamann) {
            $peminjamann->integer('peminjamanID')->autoIncrement();
            $peminjamann->integer('UserID');
            $peminjamann->integer('BukuID');
            $peminjamann->date('TanggalPeminjaman');
            $peminjamann->date('TanggalPengembalian');
            $peminjamann->string('StatusPeminjaman');
            $peminjamann->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('peminjaman');
    }
};
