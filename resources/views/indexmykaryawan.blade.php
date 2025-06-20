@extends('template')

@section('content')

	<h3>Data karyawan</h3>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama</th>
			<th>Divisi</th>
            <th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($mykaryawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ $p->namalengkap }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ $p->departemen }}</td>
			<td>
				<a href="/mykaryawan/view/{{ $p->kodepegawai }}" class="btn btn-primary">View</a>
                <a href="/mykaryawan/edit/{{ $p->kodepegawai }}" class="btn btn-primary">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection
