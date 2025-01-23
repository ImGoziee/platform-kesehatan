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
        Schema::create('ahli', function (Blueprint $table) {
            $table->id('id_ahli');
            $table->unsignedBigInteger('id_obat')->references('id_obat')->on('obats');
            $table->string('nama_ahli');
            $table->string('foto_ahli');
            $table->string('email_ahli');
            $table->string('nomor_ahli');
            $table->string('deskripsi_ahli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ahlis');
    }
};
