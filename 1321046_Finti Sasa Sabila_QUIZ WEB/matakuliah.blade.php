@extends("tema.layout")
@section("isi")
<h3>Data Mata Kuliah</h3>
<a href="/mk/tambah">Tambah</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>SKS</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mk as $i)
        <tr>
            <td>{{ $i->kode }}</td>
            <td>{{ $i->nama }}</td>
            <td>{{ $i->sks }}</td>
            <td>
            <a href="/mk/ubah/{{ $i->id }}">Ubah</a> |
            <a href="/mk/hapus/{{ $i->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

<!--1321046 - FINTI SASA SABILA-->