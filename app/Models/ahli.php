<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ahli extends Model
{
    /** @use HasFactory<\Database\Factories\AhliFactory> */
    use HasFactory;
    // protected $table = 'ahli';

    protected $fillable = [
        'id_obat',
        'nama_ahli',
        'foto_ahli',
        'email_ahli',
        'nomor_ahli',
        'deskripsi_ahli',
    ];

    protected $primaryKey = 'id_ahli';
}
