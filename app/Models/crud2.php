<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nama',
        'jurusan',
        'nohp',
        'email',
        'alamat'
    ];
}
