@extends("tema.layout")
@section("isi")
<h3>Ubah Data MataKuliah</h3>
<form method="post" action="/mk/{{ $m->id }}">
@csrf @method("PATCH")
<div class="form-group">
    <label for="kode">Kode:</label>
    <input type="number" class="form-control" id="kode" name="kode" 
        value="{{ $m->kode }}" placeholder="isi Kode"/>
</div>
<div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control" id="nama" name="nama" 
    value="{{ $m->nama }}" placeholder="isi Nama"/>
</div>
<div class="form-group">
    <label for="sks">SKS:</label>
    <input type="text" class="form-control" id="sks" name="sks" 
    value="{{ $m->sks }}" placeholder="isi SKS"/>
</div>
<button type="submit" class="btn btn-success">Ubah</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection

<!--1321046 - FINTI SASA SABILA-->