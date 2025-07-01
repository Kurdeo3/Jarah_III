<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_foto_galeri',
        'tanggal_foto_galeri',
        'foto_galeri'
    ];
}
