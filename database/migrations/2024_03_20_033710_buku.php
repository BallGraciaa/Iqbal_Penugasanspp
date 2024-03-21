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
        Schema::create('buku', function (Blueprint $bk) {
            $bk->integer('BukuID')->autoIncrement();
            $bk->string('Judul', 255);
            $bk->string('Penulis', 255);
            $bk->string('Penerbit', 255);
            $bk->integer('TahunTerbit');
            $bk->integer('stok');
            $bk->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('buku') ;
    }
};
