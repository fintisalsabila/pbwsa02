@extends("tema.layout")
@section("isi")
    <h3>Data Pegawai</h3>
    <a href="{{ url('/pegawai/tambah') }}">Tambah</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Unit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $data) 
                <tr>
                    <td>{{ $data->id_pegawai }}</td>
                    <td>{{ $data->dosen->nama_dosen }}</td>
                    <td>{{ $data->unit }}</td>
                    <td>
                        <a href="{{ route('pegawai.edit', ['id' => $data->id_pegawai]) }}">Ubah</a> | 
                        <a href="{{ route('pegawai.hapus', ['id' => $data->id_pegawai]) }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
