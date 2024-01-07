<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskList = [
        'satu' => 'Makan',
        'dua' => 'Bekerja',
        'tiga' => 'Tidur'
    ];

    public function tampilsemua() {
        return $this->taskList;
    }

    public function tampil($nomor) {
        return $this->taskList[$nomor];
    }

    public function tambah() {
        $this->taskList[request()->nomor] = request()->aktifitas;
        return $this->taskList;
    }

    public function ubah($nomor) {
        $this->taskList[$nomor] = request()->aktifitas;
        return $this->taskList;
    }

    public function hapus($nomor) {
        unset($this->taskList[$nomor]);
        return $this->taskList;
    }

} //tutup-nya class TaskController