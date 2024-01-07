@extends("tema.layout")
@section("isi")
<h3>Tambah Data MataKuliah</h3>
<form method="post" action="/mk">
@csrf
<div class="form-group">
    <label for="kode">Kode:</label>
    <input type="number" class="form-control" id="kode" name="kode" 
        placeholder="isi Kode"/>
</div>
<div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control" id="nama" name="nama"
        placeholder="isi Nama"/>
</div>
<div class="form-group">
    <label for="sks">SKS:</label>
    <input type="number" class="form-control" id="sks" name="sks"
        placeholder="isi SKS"/>
</div>
<button type="submit" class="btn btn-success">Tambah</button>
<button type="button" class="btn btn-danger"
    onclick="history.go(-1)">Batal</button>
</form>
@endsection

<!--1321046 - FINTI SASA SABILA-->