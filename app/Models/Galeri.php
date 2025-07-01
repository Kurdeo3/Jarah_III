<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_foto_galeri',
        'tanggal_foto_galeri',
        'foto_galeri'
    ];
}
