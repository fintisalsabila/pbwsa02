<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = "matakuliahs";
    
    protected $fillable = [
        'id', 'nama', 'sks', 'id_dosen', 'deskripsi',
    ];
    
    // Assuming you have a relationship with the Dosen model
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
}

//1321046 - FINTI SASA SABILA