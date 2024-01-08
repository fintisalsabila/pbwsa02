@extends("tema.layout")
@section("isi")
    <h3>Hapus Data Pegawai</h3>
    <form method="post" action="{{ route('pegawai.hapus', ['id' => $pegawai->id_pegawai]) }}">
        @csrf
        @method("DELETE")
        <div class="form-group">
            <label for="id_dosen">Nama Dosen: {{ $pegawai->dosen->nama_dosen }}</label>
        </div>
        <div class="form-group">
            <label for="unit">Prodi: {{ $pegawai->unit }}</label>
        </div>

        <button type="submit" class="btn btn-success">Hapus</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
    </form>
@endsection
