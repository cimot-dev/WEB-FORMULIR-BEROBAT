<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nim', 'alamat', 'jurusan'];
}

