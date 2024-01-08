<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Dosen;

class MkController extends Controller
{
    public function tampilSemua() {
        $m = MataKuliah::all();
        // return $m;
        return view("matakuliah", ['mk' => $m]);        
    } 
    public function tampil($id) {
        $m = MataKuliah::find($id);
        return $m;
    }
    public function tambah(Request $r)
{
    MataKuliah::create([
        'kode' => $r->id,
        'nama' => $r->nama,
        'sks' => $r->sks,
        'id_dosen' => $r->id_dosen,
        'deskripsi' => $r->deskripsi,
    ]);

    // kembali ke tampil data mata kuliah
    return redirect("/mk");
}

public function ubah(Request $r, $id)
{
    $m = MataKuliah::find($id);

    $m->update([
        'kode' => $r->id,
        'nama' => $r->nama,
        'sks' => $r->sks,
        'id_dosen' => $r->id_dosen,
        'deskripsi' => $r->deskripsi,
    ]);

    // kembali ke tampil data mata kuliah
    return redirect("/mk");
}

    public function hapus($id) {
        $m = MataKuliah::find($id);
        $m->delete();
        // kembali ke tampil data mahasiswa
        return redirect("/mk");
    }

    public function formTambah() {
        $dosens = Dosen::all(); // Assuming Dosen is your model for the dosen table
        $m = new MataKuliah();
        return view("matakuliah_tambah", ['m' => $m, 'dosens' => $dosens]);
    }
    
    
    public function formUbah($id) {
        $m = MataKuliah::find($id);
        return view("matakuliah_ubah", ['m' => $m]);
    }
    
    public function formHapus($id) {
        $m = MataKuliah::find($id);
        return view("matakuliah_hapus", ['m' => $m]);
    }
    
}

//1321046 - FINTI SASA SABILA