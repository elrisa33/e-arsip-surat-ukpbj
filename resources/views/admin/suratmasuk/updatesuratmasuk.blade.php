@extends('admin.layout')
@section('title')
     Surat Masuk
@endsection
@section('content')
<div class="card">  
    <h5 class="card-header">
        Update Surat Masuk
    </h5>
    <div class="card-body">
    <form action="/updatesuratmasuk" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<label for="nomor_urut" class="form-label">Nomor Urut</label>
<input type="text" class="form-control" name="nomor_urut" id="nomor_urut" placeholder="Masukan Nomor Urut" value="{{ $Suratmasuk->nomor_urut }}">
<div class="text-danger mt-1">
@error('nomor_urut')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_berkas" class="form-label">Nomor Berkas</label>
<input type="text" class="form-control" name="nomor_berkas" id="nomor_berkas" placeholder="Masukan Nomor Berkas" value="{{ $Suratmasuk->nomor_berkas }}">
<div class="text-danger mt-1">
@error('nomor_berkas')
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
<label for="tanggal" class="form-label">Tanggal</label>
<input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Masukan Tanggal" value="{{ $Suratmasuk->tanggal }}">
<div class="text-danger mt-1">
@error('tanggal')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor" class="form-label">Nomor</label>
<input type="text" class="form-control" name="nomor" id="nomor" placeholder="Masukan Nomor" value="{{ $Suratmasuk->nomor }}">
<div class="text-danger mt-1">
@error('nomor')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="perihal" class="form-label">Perihal</label>
<input type="text" class="form-control" name="perihal" id="perihal" placeholder="Masukan Perihal" value="{{ $Suratmasuk->perihal }}">
<div class="text-danger mt-1">
@error('perihal')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_petunjuk" class="form-label">Nomor Petunjuk</label>
<input type="text" class="form-control" name="nomor_petunjuk" id="nomor_petunjuk" placeholder="Masukan Nomor Petunjuk" value="{{ $Suratmasuk->nomor_petunjuk }}">
<div class="text-danger mt-1">
@error('nomor_petunjuk')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_paket" class="form-label">Nomor Paket</label>
<input type="text" class="form-control" name="nomor_paket" id="nomor_paket" placeholder="Masukan Nomor Paket" value="{{ $Suratmasuk->nomor_paket }}">
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