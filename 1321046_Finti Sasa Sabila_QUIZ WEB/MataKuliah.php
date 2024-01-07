<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = "matakuliahs";
    protected $fillable = [
        'kode', 'nama', 'sks'
    ];    
}

//1321046 - FINTI SASA SABILA