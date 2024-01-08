@extends("tema.layout")
@section("isi")
    <h3>Data KRS</h3>
    <a href="/krs/tambah">Tambah</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>SKS</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($krs as $i)
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->kode_mk }}</td>
                    <td>{{ $i->nama_mk }}</td>
                    <td>{{ $i->sks }}</td>
                    <td>{{ $i->kelas }}</td>
                    <td>
                        <a href="/krs/ubah/{{ $i->id }}">Ubah</a> |
                        <a href="/krs/hapus/{{ $i->id }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
