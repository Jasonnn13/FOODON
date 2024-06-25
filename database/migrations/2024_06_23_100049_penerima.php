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
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(0)->constrained()->onDelete('cascade');
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
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima');
    }
};
