<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;


Route::get('halo', function () {
    return 'Selamat datang di Laravel';
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});



Route::get('/publishfrontend', function () {
    return view('publishfrontend');
});

// Tambahan route sesuai file di views
Route::get('/p1', function () {
    return view('p1');
});

Route::get('/p4', function () {
    return view('p4');
});

Route::get('/p7part1', function () {
    return view('p7part1');
});

Route::get('/p7part2', function () {
    return view('p7part2');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('/template1', function () {
    return view('template1');
});

//selalu beri comment untuk route yang setipe. karena sampai akhir nanti kita hanya pake yang route kalo ga comment nanti kalian yang kesulitan
//pegawai
//Route::get('dosen', [Link::class, 'index']);
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);
//Route::get('formulir', [Pegawai2Controller::class, 'formulir']);
//Route::post('formulir/proses', [Pegawai2Controller::class, 'proses']);

//blog
//Route::get('/blog', [BlogController::class, 'home']);
//Route::get('/blog/tentang', [BlogController::class, 'tentang']);
//Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

//CRUD Sofa
use App\Http\Controllers\SofaController;

Route::get('/sofa', [SofaController::class, 'index']);
Route::get('/sofa/tambah', [SofaController::class, 'tambah']);
Route::post('/sofa/store', [SofaController::class, 'store']);
Route::get('/sofa/edit/{id}', [SofaController::class, 'edit']);
Route::post('/sofa/update', [SofaController::class, 'update']);
Route::get('/sofa/hapus/{id}', [SofaController::class, 'hapus']);
Route::get('/sofa/cari', [SofaController::class, 'cari']);
Route::get('/sofa/autocomplete', [SofaController::class, 'autocomplete']);
Route::get('/sofa/find/{merk}', [SofaController::class, 'findByMerk']);


//CRUD KeranjangBelanja

use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/create', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');
Route::get('/keranjang/cari', [KeranjangBelanjaController::class, 'cari'])->name('keranjang.cari');


//CRUD Karyawan
use App\Http\Controllers\KaryawanController;

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

//CRUD Siswa
use App\Http\Controllers\SiswaController;

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/tambah', [SiswaController::class, 'tambah']);
Route::post('/siswa/store', [SiswaController::class, 'store']);
Route::post('/siswa/update', [SiswaController::class, 'update']);
Route::get('/siswa/hapus/{nis}', [SiswaController::class, 'hapus']);
Route::get('/siswa/cari', [SiswaController::class, 'cari']);

use App\Http\Controllers\PageCounterController;

Route::get('/pagecounter', [PageCounterController::class, 'show']);

//CRUD Karyawan
use App\Http\Controllers\myKaryawanController;

Route::get('/mykaryawan', [myKaryawanController::class, 'index']);
Route::post('/mykaryawan/update', [myKaryawanController::class, 'update']);
Route::get('/mykaryawan/edit/{id}', [myKaryawanController::class, 'edit']);
Route::get('/mykaryawan/view/{id}', [myKaryawanController::class, 'view']);
Route::post('/mykaryawan/store/', [myKaryawanController::class, 'store']);
