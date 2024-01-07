<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MkController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', [HomeController::class,'tampil']);
Route::get('/', [MhsController::class,'tampilSemua']);

Route::get('/task', [TaskController::class,'tampilSemua']);
Route::get('/task/{nomor}', [TaskController::class,'tampil']);
Route::post('/task', [TaskController::class,'tambah']);
Route::patch('/task/{nomor}', [TaskController::class,'ubah']);
Route::delete('/task/{nomor}', [TaskController::class,'hapus']);

Route::get('/about', function () {
    return view('tentang');
});

Route::get('/mhs/tambah', [MhsController::class, 'formTambah'])->middleware('is_staf_manajer');
Route::get('/mhs/ubah/{id}', [MhsController::class, 'formUbah'])->middleware('is_staf_manajer');
Route::get('/mhs/hapus/{id}', [MhsController::class, 'formHapus'])->middleware('is_manajer');
Route::get('/mhs', [MhsController::class,'tampilSemua']);
Route::get('/mhs/{id}', [MhsController::class,'tampil']);
Route::post('/mhs', [MhsController::class,'tambah']);
Route::patch('/mhs/{id}', [MhsController::class,'ubah']);
Route::delete('/mhs/{id}', [MhsController::class,'hapus']);

Route::get('/mk/tambah', [MkController::class,'formTambah']);
Route::get('/mk/ubah/{id}', [MkController::class,'formUbah']);
Route::get('/mk/hapus/{id}', [MkController::class,'formHapus']);
Route::get('/mk', [MkController::class,'tampilSemua']);
Route::get('/mk/{id}', [MkController::class,'tampil']);
Route::post('/mk', [MkController::class,'tambah']);
Route::patch('/mk/{id}', [MkController::class,'ubah']);
Route::delete('/mk/{id}', [MkController::class,'hapus']);

//1321046 - FINTI SASA SABILA