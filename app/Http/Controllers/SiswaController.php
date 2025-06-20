<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
	{
    	// mengambil data dari table
		$siswa = DB::table('siswa')
        ->select('nis', DB::raw('UPPER(namasiswa) as namasiswa'), 'kelas', DB::raw('LOWER(jurusan) as jurusan'))
        ->paginate(10);

    	// mengirim data  ke view index
		return view('indexsiswa',['siswa' => $siswa]);

	}

    // method untuk menampilkan view form tambah
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahsiswa');
	}

	// method untuk insert data ke table
	public function store(Request $request)
	{
        //cek gaada nis yang sama
        $request->validate([
            'nis' => 'required|unique:siswa,nis|size:5',
            'namasiswa' => 'required|max:50',
            'kelas' => 'required|max:20',
            'jurusan' => 'required|max:20',
            ]);

        // insert data ke table
		DB::table('siswa')->insert([
			'nis' => $request->nis,
			'namasiswa' => $request->namasiswa,
			'kelas' => $request->kelas,
			'jurusan' => $request->jurusan,
		]);
		// alihkan halaman ke halaman
		return redirect('/siswa');

	}

	// update data
	public function update(Request $request)
	{
		// update data
		DB::table('siswa')->where('nis',$request->nis)->update([
			'nis' => $request->nis,
			'namasiswa' => $request->namasiswa,
			'kelas' => $request->kelas,
			'jurusan' => $request->jurusan,
		]);
		// alihkan halaman ke halaman
		return redirect('/siswa');
	}

	// method untuk hapus data
	public function hapus($nis)
	{
		// menghapus data  berdasarkan id yang dipilih
		DB::table('siswa')->where('nis',$nis)->delete();

		// alihkan halaman ke halaman
		return redirect('/siswa');
	}

    public function cari(Request $request)
	{
		// menangkap data
		$cari = $request->cari;

    		// mengambil data dari table  sesuai pencarian data
		$namasiswa = DB::table('siswa')
		->where('namasiswa','like',"%".$cari."%")
		->paginate();

    		// mengirim data  ke view index
		return view('indexsiswa',['siswa' => $namasiswa,'cari'=>$cari]);

	}
}
