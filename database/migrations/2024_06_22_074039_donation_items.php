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
        Schema::create('donation_items', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('lokasi_pengambilan');
            $table->date('tanggal_kadaluwarsa');
            $table->integer('jumlah');
            $table->string('foto', 300); 
            $table->timestamps();
            $table->integer('status')->default(0); //0 belum diambil, 1 diambil
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_items');
    }
};
