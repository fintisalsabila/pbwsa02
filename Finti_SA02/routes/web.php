<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MkController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
Route::get('/', [MhsController::class, 'tampilSemua']);

Route::get('/task', [TaskController::class, 'tampilSemua']);
Route::get('/task/{nomor}', [TaskController::class, 'tampil']);
Route::post('/task', [TaskController::class, 'tambah']);
Route::patch('/task/{nomor}', [TaskController::class, 'ubah']);
Route::delete('/task/{nomor}', [TaskController::class, 'hapus']);

Route::get('/about', function () {
    return view('tentang');
});


// Grouping Mahasiswa Routes
Route::middleware('is_staf_manajer')->group(function () {
    Route::get('/mhs/tambah', [MhsController::class, 'formTambah']);
    Route::get('/mhs/ubah/{id}', [MhsController::class, 'formUbah']);
    Route::get('/krs/tambah', [KrsController::class, 'buatKrsForm']);
    Route::get('/krs/tambah', [KrsController::class, 'buatKrsForm']);
    Route::post('/krs', [KrsController::class, 'simpanKrs']);
    Route::get('/krs/ubah/{id}', [KrsController::class, 'editKrsForm']);
    Route::patch('/krs/{id}', [KrsController::class, 'perbaruiKrs']);
});

Route::middleware('is_manajer')->group(function () {
    Route::get('/mhs/hapus/{id}', [MhsController::class, 'formHapus']);
    Route::get('/krs/hapus/{id}', [KrsController::class, 'hapusKrs']);
});

Route::get('/mhs', [MhsController::class, 'tampilSemua']);
Route::get('/mhs/{id}', [MhsController::class, 'tampil']);
Route::post('/mhs', [MhsController::class, 'tambah']);
Route::patch('/mhs/{id}', [MhsController::class, 'ubah']);
Route::delete('/mhs/{id}', [MhsController::class, 'hapus']);


// Grouping Matakuliah Routes
Route::get('/mk/tambah', [MkController::class, 'formTambah']);
Route::get('/mk/ubah/{id}', [MkController::class, 'formUbah']);
Route::get('/mk/hapus/{id}', [MkController::class, 'formHapus']);
Route::get('/mk', [MkController::class, 'tampilSemua']);
Route::get('/mk/{id}', [MkController::class, 'tampil']);
Route::post('/mk', [MkController::class, 'tambah']);
Route::patch('/mk/{id}', [MkController::class, 'ubah']);
Route::delete('/mk/{id}', [MkController::class, 'hapus']);


// Grouping KRS Routes
Route::get('/krs/tambah', [KrsController::class, 'formTambahKrs']);
Route::get('/krs/ubah/{id}', [KrsController::class, 'formUbahKrs']);
Route::get('/krs/hapus/{id}', [KrsController::class, 'formHapusKrs']);
Route::get('/krs', [KrsController::class, 'tampilSemua']);
Route::get('/krs/{id}', [KrsController::class, 'tampil']);
Route::post('/krs', [KrsController::class, 'createKrs']);
Route::patch('/krs/{id}', [KrsController::class, 'updateKrs']);
Route::delete('/krs/{id}', [KrsController::class, 'deleteKrs']);

// Grouping dosen Routes
Route::get('/dosen/tambah', [DosenController::class,'formTambah']);
Route::get('/dosen/ubah/{id}', [DosenController::class,'formUbah']);
Route::get('/dosen/hapus/{id}', [DosenController::class,'formHapus']);
Route::get('/dosen', [DosenController::class,'tampilSemua']);
Route::get('/dosen/{id}', [DosenController::class,'tampil']);
Route::post('/dosen', [DosenController::class,'tambah']);
Route::patch('/dosen/{id}', [DosenController::class, 'ubah']);
Route::delete('/dosen/{id}', [DosenController::class,'hapus']);

// Grouping pegawai Routes
Route::get('/pegawai', [PegawaiController::class,'tampilSemua']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'pegawaiTambah']);
Route::post('/pegawai', [PegawaiController::class,'tambah']);
Route::get('/pegawai/ubah/{id}', [PegawaiController::class, 'pegawaiUbah'])->name('pegawai.edit');
Route::put('/pegawai/{id}', [PegawaiController::class, 'ubah'])->name('pegawai.update');
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'pegawaiHapus'])->name('pegawai.hapus');
Route::delete('/pegawai/hapus/{id}', [PegawaiController::class,'hapus']);

//1321046 - FINTI SASA SABILA