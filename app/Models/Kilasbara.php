<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kilasbara extends Model
{
    protected $fillable = [
        'judul',
        'tgl_publish',
        'dirjen',
        'deskripsi',
        'kementrian',
        'gambar',
        'referensi'
    ];
}
