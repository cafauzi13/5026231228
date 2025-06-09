<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SofaController extends Controller
{
    public function index()
    {
        $sofa = DB::table('sofa')->paginate(10);
        return view('index3', ['sofa' => $sofa]);
    }

    public function tambah()
    {
        return view('tambahsofa');
    }

    public function store(Request $request)
    {
        DB::table('sofa')->insert([
            'merk' => $request->merk,
            'harga' => $request->harga,
            'ketersediaan' => $request->ketersediaan == 'Y' ? 1 : 0,
            'berat' => $request->berat,
        ]);
        return redirect('/sofa');
    }

    public function edit($id)
    {
        $sofa = DB::table('sofa')->where('ID', $id)->get();
        return view('editsofa', ['sofa' => $sofa]);
    }

    public function update(Request $request)
    {
        DB::table('sofa')->where('ID', $request->id)->update([
            'merk' => $request->merk,
            'harga' => $request->harga,
            'ketersediaan' => $request->ketersediaan == 'Y' ? 1 : 0,
            'berat' => $request->berat,
        ]);
        return redirect('/sofa');
    }

    public function hapus($id)
    {
        DB::table('sofa')->where('ID', $id)->delete();
        return redirect('/sofa');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $sofa = DB::table('sofa')->where('merk', 'like', "%".$cari."%")->paginate();
        return view('index3', ['sofa' => $sofa, 'cari' => $cari]);
    }

    public function autocomplete(Request $request)
{
    $keyword = $request->get('term'); // Bootstrap autocomplete kirim pakai 'term'
    $data = DB::table('sofa')
        ->where('merk', 'LIKE', "%$keyword%")
        ->pluck('merk');

    return response()->json($data);
}

public function findByMerk($merk)
{
    $sofa = DB::table('sofa')->where('merk', $merk)->first();
    if ($sofa) {
        return response()->json([
            'status' => 'found',
            'data' => $sofa
        ]);
    } else {
        return response()->json([
            'status' => 'not_found',
            'message' => 'Item tidak ditemukan. Untuk menambahkan, kembali ke menu Tambah.'
        ]);
    }
}

}

