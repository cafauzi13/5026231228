<?php

namespace App\Http\Controllers;
//kalau di java adalah package

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');

    }
     public function index(){
    	$nama = "Fauzi";
        $umur = "15";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        $alamat = "Asia";
    	return view('biodata',['nama' => $nama, 'usia'=>$umur, 'alamat' =>$alamat, 'matkul' => $pelajaran]); //bisa multiple, yg kiri di versi viewnya
    }
}

