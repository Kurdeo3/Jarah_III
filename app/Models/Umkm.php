<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemilik_umkm',
        'nama_umkm',
        'no_telp_umkm',
        'deskripsi_umkm',
        'foto_umkm'
    ];
}
