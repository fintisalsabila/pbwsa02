@extends("tema.layout")
@section("isi")
<h3>Hapus Data MataKuliah</h3>
<form method="post" action="/mk/{{ $m->id }}">
@csrf @method("DELETE")
<div class="form-group">
    <label for="kode">Kode: {{ $m->kode }}</label>
</div>
<div class="form-group">
    <label for="nama">Nama: {{ $m->nama }}</label>
</div>
<div class="form-group">
    <label for="sks">SKS: {{ $m->sks }}</label>
</div>
<button type="submit" class="btn btn-success">Hapus</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection

<!--1321046 - FINTI SASA SABILA-->