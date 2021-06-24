<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekruitasi extends Model
{
    protected $fillable = [
        'nama',
        'ktp',
        'lahir',
        'pendidikan',
        'divisi',
        'status',
    ];
}
