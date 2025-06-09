@extends('template')

@section('content')
<h3>Tambah Data Sofa</h3>

<a href="/sofa" class="btn btn-info">Kembali</a>

<br/><br/>

<form action="/sofa/store" method="post">
    {{ csrf_field() }}

    <div class="row mb-3">
        <div class="col-3">Merk Sofa</div>
        <div class="col-8">
            <input type="text" name="merk" required class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">Harga Sofa</div>
        <div class="col-8">
            <input type="number" name="harga" required class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">Tersedia</div>
        <div class="col-8">
            <select name="ketersediaan" class="form-control" required>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">Berat (kg)</div>
        <div class="col-8">
            <input type="number" step="0.01" name="berat" required class="form-control">
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>
@endsection
