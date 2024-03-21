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
        Schema::create('ulasan_buku', function (Blueprint $ub) {
            $ub->integer('UlasanID')->autoIncrement();
            $ub->integer('UserID');
            $ub->integer('BukuID');
            $ub->string('Ulasan');
            $ub->integer('rating');
            $ub->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('ulasan_buku');
    }
};
