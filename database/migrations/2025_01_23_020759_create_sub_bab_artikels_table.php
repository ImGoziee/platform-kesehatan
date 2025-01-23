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
        Schema::create('sub_bab_artikels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_artikel')->references('id_artikel')->on('artikels');
            $table->string('judul_sub_bab');
            $table->string('isi_sub_bab');
            $table->int('urutan_sub_bab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_bab_artikels');
    }
};
