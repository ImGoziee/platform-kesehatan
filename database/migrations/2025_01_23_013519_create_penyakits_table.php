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
        Schema::create('penyakits', function (Blueprint $table) {
            $table->id('id_penyakit');
            $table->unsignedBigInteger('id_obat')->references('id_obat')->on('obats');
            $table->string('nama_penyakit');
            $table->string('penjelasan_penyakit');
            $table->string('penyebab_penyakit');
            $table->string('ilustrasi_penyakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakits');
    }
};
