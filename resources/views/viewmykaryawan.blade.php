@extends('template')
@section('content')
	<h3>Edit Data karyawan</h3>

	<a href="/mykaryawan"> Kembali</a>

	<br/>
	<br/>


		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Pegawai : A001
            </div>
            <div class="col-8">

            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Nama Lengkap : ANDI PRASETYO
            </div>
            <div class="col-8">

            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Divisi : IT
            </div>
            <div class="col-8">

            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Departemen : 1
            </div>
            <div class="col-8">

            </div>
        </div>

@endsection
