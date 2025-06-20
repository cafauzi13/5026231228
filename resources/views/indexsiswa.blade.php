@extends('template')

@section('content')

	<h3>Data siswa</h3>
	<br/>
	<p>Cari Data Siswa :</p>
	<form action="/siswa/cari" method="GET">
		<input type="text" class="form-control w-" name="cari" placeholder="Cari siswa .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<table class="table table-striped">
		<tr>
			<th>NIS </th>
			<th>Nama</th>
			<th>Kelas</th>
            <th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		@foreach($siswa as $p)
		<tr>
			<td>{{ $p->nis }}</td>
			<td>{{ $p->namasiswa }}</td>
			<td>{{ $p->kelas}}</td>
			<td>{{ $p->jurusan }}</td>
			<td>
				<a href="/siswa/hapus/{{ $p->nis }}" class="btn btn-danger">Hapus</a>

			</td>
		</tr>
		@endforeach
	</table>
    	<a href="/siswa/tambah/" class="btn btn-primary mb-3"> + Tambah Siswa Baru</a>
{{$siswa->links()}}
    @endsection
