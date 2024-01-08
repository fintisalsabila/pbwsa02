@extends("tema.layout")
@section("isi")
<h3>Data Dosen</h3>
<a href="/dosen/tambah">Tambah</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nama Dosen</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosen as $i) 
                <tr>
                    <td>{{ $i->nama_dosen }}</td>
                    <td>{{ $i->alamat }}</td>
                    <td>
                        <a href="/dosen/ubah/{{ $i->id_dosen }}">Ubah</a> | 
                        <a href="/dosen/hapus/{{ $i->id_dosen }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
<!-- 1321002 - Wardah Hafiz -->