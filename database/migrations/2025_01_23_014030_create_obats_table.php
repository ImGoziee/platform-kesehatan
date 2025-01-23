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
        Schema::create('obats', function (Blueprint $table) {
            $table->id('id_obat');
            $table->unsignedBigInteger('id_ahli')->references('id_ahli')->on('ahlis');
            $table->unsignedBigInteger('id_penyakit')->references('id_ahli')->on('penyakits');
            $table->string('nama_obat');
            $table->string('resep_obat');
            $table->string('deskripsi_obat');
            $table->string('ilustrasi_obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
