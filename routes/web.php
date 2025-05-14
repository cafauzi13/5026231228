<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
//import.java.io

//di java pake ; kalo disini pake ::
Route::get('halo', function () {
    //return view('welcome'); bisa dilempar html
    return 'Selamat datang di Laravel';
});

Route::get('blog', function () {
	return view('blog');
});

//Route::get('blog', function ());
//kalo namanya sama, dia bakal pake yang bawah sendiri

Route::get('hello', [Link::class, 'hello']);

