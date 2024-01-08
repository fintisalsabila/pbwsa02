@extends("tema.layout")
@section("isi")
    <h3>Tambah Data KRS</h3>
    <form method="post" action="/krs">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Mata Kuliah:</label>
            <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Mata Kuliah" readonly/>
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
            <label for="sks">Kelas</label>
            <input type="text" class="form-control" id="sks" name="sks" placeholder="Isi Nama Kelas"/>
        </div>

        <button type="submit" class="btn btn-success">Tambah</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
    </form>

    <!-- Menambahkan script JavaScript untuk generate angka -->
    <script>
        // Fungsi untuk meng-generate angka secara berurutan
        function generateSequentialNumber() {
            // Implementasikan logika pengambilan angka berurutan sesuai kebutuhan
            // Contoh sederhana: menggunakan timestamp
            return new Date().getTime();
        }

        // Menetapkan nilai ke elemen input dengan id "kode"
        document.getElementById("kode").value = generateSequentialNumber();
    </script>
@endsection
