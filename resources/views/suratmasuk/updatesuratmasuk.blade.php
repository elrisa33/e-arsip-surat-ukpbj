@extends('layout')
@section('title')
     Surat Masuk
@endsection
@section('content')
<div class="card">
    <h5 class="card-header">
        Update Surat Masuk
    </h5>
    <div class="card-body">
    <form action="/updatesuratmasuk/{{ $Suratmasuk->id }}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="mb-3">
<label for="nomorberkas_sm" class="form-label">Nomor Berkas</label>
<input type="text" class="form-control" name="nomorberkas_sm" id="nomorberkas_sm" placeholder="Masukan Nomor Berkas" value="{{ $Suratmasuk->nomorberkas_sm }}">
<div class="text-danger mt-1">
@error('nomorberkas_sm')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="alamat_pengirim" class="form-label">Alamat Pengirim</label>
<input type="text" class="form-control" name="alamat_pengirim" id="alamat_pengirim" placeholder="Masukan Alamat Pengirim" value="{{ $Suratmasuk->alamat_pengirim }}">
<div class="text-danger mt-1">
@error('alamat_pengirim')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="tanggal_sm" class="form-label">Tanggal</label>
<input type="date" class="form-control" name="tanggal_sm" id="tanggal_sm" placeholder="Masukan Tanggal" value="{{ $Suratmasuk->tanggal_sm }}">
<div class="text-danger mt-1">
@error('tanggal_sm')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_sm" class="form-label">Nomor</label>
<input type="text" class="form-control" name="nomor_sm" id="nomor_sm" placeholder="Masukan Nomor" value="{{ $Suratmasuk->nomor_sm }}">
<div class="text-danger mt-1">
@error('nomor_sm')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="perihal_sm" class="form-label">Perihal</label>
<input type="text" class="form-control" name="perihal_sm" id="perihal_sm" placeholder="Masukan Perihal" value="{{ $Suratmasuk->perihal_sm }}">
<div class="text-danger mt-1">
@error('perihal_sm')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomorpetunjuk_sm" class="form-label">Nomor Petunjuk</label>
<input type="text" class="form-control" name="nomorpetunjuk_sm" id="nomorpetunjuk_sm" placeholder="Masukan Nomor Petunjuk" value="{{ $Suratmasuk->nomorpetunjuk_sm }}">
<div class="text-danger mt-1">
@error('nomor_petunjuk')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_paket" class="form-label">Nomor Paket</label>
<input type="date" class="form-control" name="nomor_paket" id="nomor_paket" placeholder="Masukan Nomor Paket" value="{{ $Suratmasuk->nomor_paket }}">
<div class="text-danger mt-1">
@error('nomor_paket')
{{ $message }}
@enderror
</div>
</div>
<div class="text-end">
<a href="/suratmasuk" class="btn btn-secondary">Kembali</a>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
    </div>
</div>
@endsection
