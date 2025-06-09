@extends('template')

@section('content')
<h3>Edit Data Sofa</h3>

<a href="/sofa" class="btn btn-info">Kembali</a>

<br/><br/>

@foreach($sofa as $s)
<form action="/sofa/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $s->ID }}">

    <div class="row mb-3">
        <div class="col-3">Merk Sofa</div>
        <div class="col-8">
            <input type="text" name="merk" id="merk" required class="form-control" value="{{ $s->merk }}" autocomplete="on">
            <div id="merk-feedback" class="text-danger mt-1"></div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">Harga Sofa</div>
        <div class="col-8">
            <input type="number" name="harga" id="harga" required class="form-control" value="{{ $s->harga }}" min="0">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">Tersedia</div>
        <div class="col-8">
            <select name="ketersediaan" id="keteserdiaan" class="form-control" required>
                <option value="1" {{ $s->ketersediaan ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$s->ketersediaan ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">Berat (kg)</div>
        <div class="col-8">
            <input type="number" step="0.01" name="berat" id="berat" required class="form-control" value="{{ $s->berat }}" min="0.0">
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>
@endforeach


@endsection
