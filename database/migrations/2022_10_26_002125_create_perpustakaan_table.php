<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->id();
            $table->string('petugas');
            $table->string('anggota');
            $table->string('peminjaman');
            $table->string('pengembalian');
            $table->string('buku');
            $table->string('rak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaan');
    }
};
