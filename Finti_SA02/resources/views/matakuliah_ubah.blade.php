@extends("tema.layout")
@section("isi")
<h3>Ubah Data MataKuliah</h3>
<form method="post" action="/mk/{{ $m->id }}">
@csrf @method("PATCH")
<div class="form-group">
    <label for="kode">Kode Mata Kuliah:</label>
    <input type="number" class="form-control" id="kode" name="kode" 
        value="{{ $m->id }}" placeholder="Masukkan Kode Mata Kuliah"/>
</div>
<div class="form-group">
    <label for="nama">Nama Mata Kuliah:</label>
    <input type="text" class="form-control" id="nama" name="nama" 
        value="{{ $m->nama }}" placeholder="Masukkan Nama Mata Kuliah"/>
</div>
<div class="form-group">
    <label for="sks">Jumlah SKS:</label>
    <input type="text" class="form-control" id="sks" name="sks" 
        value="{{ $m->sks }}" placeholder="Masukkan Jumlah SKS"/>
</div>
<button type="submit" class="btn btn-success">Ubah</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection

<!--1321046 - FINTI SASA SABILA-->