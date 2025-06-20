<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myKaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table
		$mykaryawan = DB::table('mykaryawan')
        ->select('kodepegawai', DB::raw ('LOWER(namalengkap) as namalengkap'), 'divisi', DB::raw('LOWER(departemen) as departemen'))->get();

    	// mengirim data  ke view index
		return view('indexmykaryawan',['mykaryawan' => $mykaryawan]);

	}


     // Menampilkan data karyawan yang ingin diedit
    public function edit($id)
    {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->get();
        return view('editmykaryawan', ['mykaryawan' => $mykaryawan]);

    }

	// update data
	public function update(Request $request)
	{
		// update data
		DB::table('mykaryawan')->where('kodepegawai',$request->id)->update([
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman
		return redirect('/mykaryawan');
	}
 public function store(Request $request)
	{

        // insert data ke table
		DB::table('mykaryawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman
		return redirect('/karyawan');

	}

     public function view($id)
    {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->get();
        return view('viewmykaryawan', ['mykaryawan' => $mykaryawan]);
    }
}

