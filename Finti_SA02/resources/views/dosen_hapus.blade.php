@extends("tema.layout")
@section("isi")
<h3>Hapus Data Mahasiswa</h3>
    <form method="post" action="/dosen/{{ $m->id_dosen }}">
    @csrf @method("DELETE")
        <div class="form-group">
            <label for="nama_dosen">Nama Dosen: {{ $m->nama_dosen }}</label>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat: {{ $m->alamat }}</label>
        </div>
        <button type="submit" class="btn btn-success">Hapus</button>
        <button type="button" class="btn btn-danger" 
            onclick="history.go(-1)">Batal</button>
    </form>
@endsection