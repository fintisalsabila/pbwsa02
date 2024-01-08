<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function tampilSemua() {
        $m = Dosen::all();
  
        return view("dosen", ['dosen' => $m]);        
    } 
    public function tampil($id) {
        $m = Dosen::find($id);
        return $m;
    }
    public function formTambah() {
        return view("dosen_tambah");
    }
    public function tambah(Request $r) {
        Dosen::create([
            'nama_dosen' => $r->nama_dosen,
            'alamat' => $r->alamat
        ]);

        return redirect("/dosen");
    }

    public function formUbah($id) {
        $m = Dosen::find($id);
        return view("dosen_ubah", ['dosen' => $m]);
    }
    
    public function ubah(Request $r, $id) {
        $m = Dosen::find($id);
        $m->update([
            'nama_dosen' => $r->nama_dosen,
            'alamat' => $r->alamat
        ]);

        return redirect("/dosen");
    }
    public function formHapus($id) {
        $m = Dosen::find($id);
        return view("dosen_hapus", ['m' => $m]);
    }
    public function hapus($id) {
        $m = Dosen::find($id);
        $m->delete();
        // kembali ke tampil data mahasiswa
        return redirect("/dosen");
    }
}
