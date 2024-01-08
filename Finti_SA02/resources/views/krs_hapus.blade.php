@extends("tema.layout")
@section("isi")
    <h3>Hapus Data KRS</h3>
    <form method="post" action="/krs/{{ $krs->id }}">
        @csrf
        @method("DELETE")
        <div class="form-group">
            <label for="kode">Kode: {{ $krs->kode_mk }}</label>
        </div>
        <div class="form-group">
            <label for="nama">Nama: {{ $krs->nama_mk }}</label>
        </div>
        <div class="form-group">
            <label for="sks">SKS: {{ $krs->sks }}</label>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas: {{ $krs->kelas }}</label>
        </div>
        <button type="submit" class="btn btn-success">Hapus</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
    </form>
@endsection
