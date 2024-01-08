Untuk membuat KRS (Kartu Rencana Studi) pada Laravel 7, Anda dapat mengikuti langkah-langkah berikut menggunakan terminal atau command prompt. Pastikan Anda sudah menginstal Laravel dan memiliki proyek Laravel yang sudah dibuat sebelumnya.

1. **Buka Terminal:**
   Buka terminal atau command prompt di direktori proyek Laravel Anda.

2. **Buat Controller untuk KRS:**
   Buatlah controller untuk KRS menggunakan artisan command:
   ```bash
   php artisan make:controller KrsController
   ```

3. **Edit Controller:**
   Buka file `KrsController.php` yang baru saja dibuat (berada di direktori `app/Http/Controllers`) dan tambahkan fungsi-fungsi yang dibutuhkan untuk KRS.

4. **Buat Model untuk KRS (jika belum ada):**
   Jika Anda belum memiliki model untuk KRS, buatlah dengan perintah:
   ```bash
   php artisan make:model Krs
   ```

5. **Migrasi Database:**
   Jika struktur tabel KRS belum ada, lakukan migrasi database:
   ```bash
   php artisan make:migration create_krss_table

   php artisan migrate
   ```

6. **Buat Routes:**
   Buka file `web.php` di direktori `routes` dan tambahkan route untuk KRS.
   ```php
   use App\Http\Controllers\KrsController;

   Route::get('/krs', [KrsController::class, 'index']);
   // Tambahkan route sesuai kebutuhan (create, store, edit, update, delete, dll.)
   ```

7. **Buat View:**
   Buat view untuk KRS di direktori `resources/views` sesuai dengan struktur yang Anda inginkan.

8. **Tambahkan Fungsi pada Controller:**
   Tambahkan fungsi-fungsi pada `KrsController.php` sesuai dengan kebutuhan, seperti index, create, store, edit, update, delete, dll.

9. **Lakukan Testing:**
   Jalankan proyek Laravel Anda dan buka KRS pada browser untuk melakukan testing.

```bash
php artisan serve
```

Buka browser dan akses `http://localhost:8000/krs` atau sesuai dengan URL yang ditampilkan di terminal.

Pastikan untuk menggantikan nama file, class, dan route sesuai dengan kebutuhan proyek Anda. Selain itu, sesuaikan struktur database dan view sesuai dengan desain aplikasi KRS yang Anda inginkan.