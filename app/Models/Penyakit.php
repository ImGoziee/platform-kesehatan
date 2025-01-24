<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    /** @use HasFactory<\Database\Factories\PenyakitFactory> */
    use HasFactory;
    protected $table = 'penyakits';
    protected $primaryKey = 'id_penyakit';
    protected $fillable = [ 
        'id_obat',
        'nama_penyakit',
        'penjelasan_penyakit',
        'penyebab_penyakit',
        'ilustrasi_penyakit',
    ];
}
