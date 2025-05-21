<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		return view('blog/home'); //ini nanti jadi source kode untuk blade yg ke views jadi home.blade.php
	}

	public function tentang(){
		return view('blog/tentang');
	}

	public function kontak(){
		return view('blog/kontak');
	}
}

