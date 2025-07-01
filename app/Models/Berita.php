<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_berita',
        'deskripsi_berita',
        'tanggal_berita',
        'foto_berita',
    ];
}
