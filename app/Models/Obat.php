<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    /** @use HasFactory<\Database\Factories\ObatFactory> */
    use HasFactory;
    // protected $table = 'obat';

    protected $fillable = [
        'id_ahli',
        'id_penyakit',
        'nama_obat',
        'resep_obat',
        'deskripsi_obat',
        'ilustrasi_obat',
    ];

    protected $primaryKey = 'id_obat';
}
