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
        Schema::create('kategori_relasi', function (Blueprint $table) {
            $table->integer('KategoriBukuID')->autoIncrement;
            $table->integer('BukuID');
            $table->integer('KategoriID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kategori_relasi');
    }
};
