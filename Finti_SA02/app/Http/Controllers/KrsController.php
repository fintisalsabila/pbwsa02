<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;
use App\Http\Requests\KrsRequest;

class KrsController extends Controller
{
    public function tampilSemua() {
        $krs = Krs::all();
        return view("krs", ['krs' => $krs]);        
    }

    public function tampil($id) {
        $krs = Krs::find($id);
        return view("krs", ['krs' => $krs]);
    }

    public function createKrs(Request $request) {
        Krs::create([
            'no' => $request->no,
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'kelas' => $request->kelas,
        ]);
        // kembali ke tampil data mahasiswa
        return redirect("/krs")->with('success', 'KRS berhasil ditambahkan.');
    }

    public function updateKrs(Request $request, $id) {
        // Validasi dan update data KRS
        $krs = Krs::find($id);
        $krs->update([
            'no' => $request->no,
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'kelas' => $request->kelas,
            // Tambahkan sesuai dengan kolom pada tabel KRS
        ]);

        return redirect("/krs")->with('success', 'KRS berhasil diperbarui.');
    }

    public function deleteKrs($id) {
        // Hapus data KRS
        $krs = Krs::find($id);
        $krs->delete();

        return redirect("/krs")->with('success', 'KRS berhasil dihapus.');
    }

    
    public function formTambahKrs() {
        return view("krs_tambah");
    }
    public function formUbahKrs($id) {
        $krs = Krs::find($id);
        return view("krs_ubah", ['krs' => $krs]);
    }
    public function formHapusKrs($id) {
        $krs = Krs::find($id);
        return view("krs_hapus", ['krs' => $krs]);
    }
}
