<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;
    protected $table = "krss";
    protected $fillable = [
        'id', 'kode_mk', 'nama_mk', 'sks', 'kelas'
    ];    
}
