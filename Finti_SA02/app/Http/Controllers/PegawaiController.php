<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function tampilSemua() {
        $pegawai = Pegawai::with('dosen')->get();
        return view("pegawai", compact('pegawai'));        
    }

    public function pegawaiTambah()
    {
        $dosen = Dosen::all(); // Fetch all dosens from the database
        return view('pegawai_tambah', compact('dosen'));
    }

    public function tambah(Request $request)
    {
        Pegawai::create([
            'id_dosen' => $request->id_dosen,
            'unit' => $request->unit
        ]);

        return redirect("/pegawai");
    }


    public function pegawaiUbah($id)
    {
        $pegawai = Pegawai::find($id);
        $dosen = Dosen::all();

        return view('pegawai_ubah', ['pegawai'=> $pegawai, 'dosen' => $dosen]);
    }

    public function ubah(Request $request, $id) {
        $request->validate([
            'id_dosen' => 'required',
            'unit' => 'required|in:SIIO,TIO,TKP,ABO,TRO',
        ]);

        $pegawai = Pegawai::findOrFail($id);

        $pegawai->update([
            'id_dosen' => $request->id_dosen,
            'unit' => $request->unit,
        ]);

        return redirect('/pegawai');
    }

    public function pegawaiHapus($id)
    {
        $pegawai = Pegawai::find($id);
        $dosen = Dosen::all();

        return view('pegawai_hapus', ['pegawai'=> $pegawai, 'dosen' => $dosen]);
    }

    public function hapus($id) {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect("/pegawai");
    }
}
