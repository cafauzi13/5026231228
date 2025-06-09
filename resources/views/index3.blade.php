@extends('template')

@section('content')
	<h3>Data Sofa</h3>

	<a href="/sofa/tambah" class="btn btn-primary"> + Tambah Sofa Baru</a>
	<p>Cari Sofa :</p>
	<form action="/sofa/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Merk Sofa .." value="{{ isset($cari) ? $cari : '' }}">
		<input type="submit" class="btn btn-info mt-2" value="CARI">
	</form>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga (Rp)</th>
			<th>Tersedia</th>
			<th>Berat (kg)</th>
			<th>Opsi</th>
		</tr>
		@foreach($sofa as $s)
		<tr>
			<td>{{ $s->merk }}</td>
			<td>{{ number_format($s->harga, 0, ',', '.') }}</td>
			<td>{{ $s->ketersediaan ? 'Ya' : 'Tidak' }}</td>
			<td>{{ $s->berat }}</td>
			<td>
				<a href="/sofa/edit/{{ $s->ID }}" class="btn btn-success">Edit</a>
				<a href="/sofa/hapus/{{ $s->ID }}" class="btn btn-danger" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	{{ $sofa->links() }}
@endsection
