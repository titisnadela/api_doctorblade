<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctorblade extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal/jam',
        'nik',
        'mesin',
        'panjang'
    ];
}
