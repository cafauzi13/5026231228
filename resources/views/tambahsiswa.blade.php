@extends('template')
@section('content')
    <h3>Data Siswa</h3>

    <a href="/siswa"> Kembali</a>

    <br/>
    <br/>

    {{-- Tampilkan error validasi di sini --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/siswa/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                NIS
            </div>
            <div class="col-8">
                <input type="text" name="nis" required="required" maxlength="5" class="form-control" value="{{ old('nis') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
                <input type="text" name="namasiswa" required="required" maxlength="50" class="form-control" value="{{ old('namasiswa') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Kelas
            </div>
            <div class="col-8">
                <input type="text" name="kelas" required="required" maxlength="10" class="form-control" value="{{ old('kelas') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Jurusan
            </div>
            <div class="col-8">
                <input type="text" name="jurusan" required="required" maxlength="30" class="form-control" value="{{ old('jurusan') }}">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
