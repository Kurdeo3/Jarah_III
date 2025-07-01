<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penduduk',
        'umur_penduduk',
        'jenis_kelamin_penduduk',
        'no_telp_penduduk',
        'alamat_penduduk',
    ];
}
