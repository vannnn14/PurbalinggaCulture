<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamus extends Model
{
    protected $table = 'tb_kamus';  // pakai nama tabel kamu
    public $timestamps = false;

    protected $fillable = ['ngapak', 'indonesia'];
}
