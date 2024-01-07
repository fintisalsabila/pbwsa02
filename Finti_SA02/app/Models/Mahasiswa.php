<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas";
    protected $fillable = [
        'nim', 'nama'
    ];    
}

//1321046 - FINTI SASA SABILA