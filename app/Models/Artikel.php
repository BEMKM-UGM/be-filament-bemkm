<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul', 'tgl_publish', 'dirjen', 'deskripsi', 'kementrian', 'referensi'
    ];

    protected $casts = [
        'gambar' => 'array'
    ];
}
