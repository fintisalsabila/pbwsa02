@extends("tema.layout")
@section("isi")
<h3>Ubah Data Pegawai</h3>
<form method="post" action="{{ route('pegawai.update', $pegawai->id_pegawai) }}">
@csrf @method("put")
<div class="form-group">
    <label for="id_dosen">Nama Dosen:</label>
        <select name="id_dosen" required>
            @foreach($dosen as $dosen)
                <option value="{{ $dosen->id_dosen }}" {{ $pegawai->id_dosen == $dosen->id_dosen ? 'selected' : '' }}>
                    {{ $dosen->nama_dosen }}
                </option>
            @endforeach
        </select>
</div>
<div class="form-group">
    <label for="unit">Prodi:</label>
        <select name="unit" required>
            <option value="SIIO" {{ $pegawai->unit == 'SIIO' ? 'selected' : '' }}>SIIO</option>
            <option value="TIO" {{ $pegawai->unit == 'TIO' ? 'selected' : '' }}>TIO</option>
            <option value="TKP" {{ $pegawai->unit == 'TKP' ? 'selected' : '' }}>TKP</option>
            <option value="ABO" {{ $pegawai->unit == 'ABO' ? 'selected' : '' }}>ABO</option>
            <option value="TRO" {{ $pegawai->unit == 'TRO' ? 'selected' : '' }}>TRO</option>
        </select>
</div>

<button type="submit" class="btn btn-success">Ubah</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection