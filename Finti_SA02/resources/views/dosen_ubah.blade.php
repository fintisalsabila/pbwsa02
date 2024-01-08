@extends("tema.layout")
@section("isi")
<h3>Ubah Data Dosen</h3>
    <form method="post" action="/dosen/{{ $dosen->id_dosen }}">
    @csrf @method("PATCH")
        <div class="form-group">
            <label for="nama_dosen">Nama Dosen:</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" 
                value="{{ $dosen->nama_dosen }}" placeholder="isi nama dosen"/>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" 
            value="{{ $dosen->alamat }}" placeholder="isi alamat"/>
        </div>

        <button type="submit" class="btn btn-success">Ubah</button>
        <button type="button" class="btn btn-danger" 
            onclick="history.go(-1)">Batal</button>
    </form>
@endsection