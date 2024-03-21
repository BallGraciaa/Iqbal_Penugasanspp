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
        Schema::create('pengguna', function (Blueprint $us) {
            $us->id('userID');
            $us->string('username', 255);
            $us->string('password', 255);
            $us->string('email', 255);
            $us->string('namaLengkap');
            $us->string('alamat');
            $us->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
    
};
