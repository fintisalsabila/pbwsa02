@extends("tema.layout")
@section("isi")
    <h3>Tambah Data Pegawai</h3>
    <form method="post" action="{{ url('/pegawai') }}">
        @csrf
        <div class="form-group">
            <label for="id_dosen">Nama Dosen:</label>
            <select name="id_dosen" required>
                @foreach($dosen as $dosen)
                    <option value="{{ $dosen->id_dosen }}">{{ $dosen->nama_dosen }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="unit">Prodi:</label>
            <select name="unit" required>
                <option value="SIIO">SIIO</option>
                <option value="TIO">TIO</option>
                <option value="TKP">TKP</option>
                <option value="ABO">ABO</option>
                <option value="TRO">TRO</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-success">Tambah</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
    </form>
@endsection
