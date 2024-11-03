<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dinamika_bersama extends Model
{
    protected $fillable = [
        'judul', 'pelaksana', 'peruntukan', 'deskripsi', 'tgl_buka', 'tgl_tutup', 'buku_panduan', 'link_pendaftaran'
    ];

    protected $casts = [
        'poster' => 'array'
    ];
}
