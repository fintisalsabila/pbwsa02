@extends("tema.layout")
@section("isi")
    <h3>Tambah Data MataKuliah</h3>
    <form method="post" action="/mk">
        @csrf
        <div class="form-group">
    <label for="kode">Kode Mata Kuliah:</label>
    <input type="number" class="form-control" id="kode" name="kode" value="" readonly/>
</div>
<div class="form-group">
    <label for="nama">Nama Mata Kuliah:</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Mata Kuliah"/>
</div>
<div class="form-group">
    <label for="sks">Jumlah SKS:</label>
    <input type="number" class="form-control" id="sks" name="sks" placeholder="Masukkan Jumlah SKS"/>
</div>
<div class="form-group">
    <label for="id_dosen">Pilih Dosen:</label>
    <select class="form-control" id="id_dosen" name="id_dosen">
        <option value="" selected disabled>Pilih Dosen</option>
        @foreach($dosens as $dosen)
            <option value="{{ $dosen->id_dosen }}">{{ $dosen->nama_dosen }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="deskripsi">Deskripsi:</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi">{{ $m->deskripsi }}</textarea>
</div>

        <!-- Menambahkan script JavaScript untuk generate angka -->
        <script>
            // Fungsi untuk meng-generate angka secara acak
            function generateRandomNumber() {
                return Math.floor(Math.random() * 1000) + 1; // Menghasilkan angka acak antara 1 dan 1000
            }

            // Menetapkan nilai ke elemen input dengan id "kode"
            document.getElementById("kode").value = generateRandomNumber();
        </script>

        <button type="submit" class="btn btn-success">Tambah</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
    </form>
@endsection


<!--1321046 - FINTI SASA SABILA-->