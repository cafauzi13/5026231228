<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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
Route::get('dosen', [Link::class, 'index']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
