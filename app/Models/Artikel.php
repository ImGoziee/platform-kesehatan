<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    /** @use HasFactory<\Database\Factories\ArtikelFactory> */
    use HasFactory;
    protected $primaryKey = 'id_artikel';
    protected $fillable = [ 
        'judul_artikel',
        'isi_artikel',
        'gambar_artikel',
    ];
}
