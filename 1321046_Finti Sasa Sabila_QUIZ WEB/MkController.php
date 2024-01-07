<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

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
    public function tambah(Request $r) {
        MataKuliah::create([
            'kode' => $r->kode,
            'nama' => $r->nama,
            'sks' => $r->sks
        ]);
        // kembali ke tampil data mahasiswa
        return redirect("/mk");
    }
    public function ubah(Request $r, $id) {
        $m = MataKuliah::find($id);
        $m->update([
            'kode' => $r->kode,
            'nama' => $r->nama,
            'sks' => $r->sks
        ]);
        // kembali ke tampil data mahasiswa
        return redirect("/mk");
    }
    public function hapus($id) {
        $m = MataKuliah::find($id);
        $m->delete();
        // kembali ke tampil data mahasiswa
        return redirect("/mk");
    }

    public function formTambah() {
        return view("matakuliah_tambah");
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