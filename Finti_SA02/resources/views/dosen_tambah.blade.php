@extends("tema.layout")
@section("isi")
<h3>Tambah Data Dosen</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="post" action="/dosen">
    @csrf
<div class="form-group">
    <label for="nama_dosen">Nama Dosen:</label>
    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" 
        value="{{ old('nama_dosen') }}" placeholder="Masukkan nama dosen"/>
    @error("nama_dosen") 
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="alamat">Alamat:</label>
    <input type="text" class="form-control" id="alamat" name="alamat" 
        value="{{ old('alamat') }}" placeholder="Masukkan alamat"/>
    @error("alamat") 
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>
        <button type="submit" class="btn btn-success">Tambah</button>
        <button type="button" class="btn btn-danger" 
            onclick="history.go(-1)">Batal</button>
    </form>
@endsection