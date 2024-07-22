@extends('layout')
@section('title')
    Update Surat Keluar
@endsection
@section('content')
<div class="card">
    <h5 class="card-header">
        Update Surat Keluar
    </h5>
    <div class="card-body">
    <form action="/updatesuratkeluar/{{ $Suratkeluar->id }}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="mb-3">
<label for="nomorberkas_sk" class="form-label">Nomor Berkas</label>
<input type="text" class="form-control" name="nomorberkas_sk" id="nomorberkas_sk" placeholder="Masukan Nomor Berkas" value="{{ $Suratkeluar->nomorberkas_sk }}">
<div class="text-danger mt-1">
@error('nomorberkas_sk')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="alamat_penerima" class="form-label">Alamat Penerima</label>
<input type="text" class="form-control" name="alamat_penerima" id="alamat_penerima" placeholder="Masukan Alamat Penerima" value="{{ $Suratkeluar->alamat_penerima }}">
<div class="text-danger mt-1">
@error('alamat_penerima')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="tanggal_sk" class="form-label">Tanggal</label>
<input type="date" class="form-control" name="tanggal_sk" id="tanggal_sk" placeholder="Masukan Tanggal" value="{{ $Suratkeluar->tanggal_sk }}">
<div class="text-danger mt-1">
@error('tanggal_sk')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="perihal_sk" class="form-label">Perihal</label>
<input type="text" class="form-control" name="perihal_sk" id="perihal_sk" placeholder="Masukan Perihal" value="{{ $Suratkeluar->perihal_sk }}">
<div class="text-danger mt-1">
@error('perihal_sk')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomorpetunjuk_sk" class="form-label">Nomor Petunjuk</label>
<input type="text" class="form-control" name="nomorpetunjuk_sk" id="nomorpetunjuk_sk" placeholder="Masukan Nomor Petunjuk" value="{{ $Suratkeluar->nomorpetunjuk_sk }}">
<div class="text-danger mt-1">
@error('nomorpetunjuk_sk')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_sk" class="form-label">Nomor</label>
<input type="text" class="form-control" name="nomor_sk" id="nomor_sk" placeholder="Masukan Nomor" value="{{ $Suratkeluar->nomor_sk }}">
<div class="text-danger mt-1">
@error('nomor_sk')
{{ $message }}
@enderror
</div>
</div>
<div class="text-end">
<a href="/suratkeluar" class="btn btn-secondary">Kembali</a>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
    </div>
</div>
@endsection
