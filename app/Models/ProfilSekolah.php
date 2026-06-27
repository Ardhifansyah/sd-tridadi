<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    use HasFactory;

    protected $table = 'profil_sekolahs';

    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'status',
        'akreditasi',
        'tanggal_berdiri',
        'alamat',
        'sejarah',
        'tujuan',
        'struktur_organisasi'
    ];
}