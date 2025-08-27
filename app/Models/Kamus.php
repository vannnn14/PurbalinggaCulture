<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamus extends Model
{
    // Nama tabel di database
    protected $table = 'tb_kamus';

    // Kalau tabel tidak punya kolom created_at & updated_at
    public $timestamps = false;

    // Kolom yang bisa diisi mass assignment
    protected $fillable = [
        'ngapak',
        'indonesia',
    ];
}
