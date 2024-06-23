<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('nama_lengkap');
            $table->integer('umur');
            $table->string('stkm_foto')->nullable();
            $table->string('alamat');
            $table->string('foto_profil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Mundurkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima');
    }
};
