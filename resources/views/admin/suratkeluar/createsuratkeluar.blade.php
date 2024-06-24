@extends('admin.layout')
@section('title')
    Create Surat Keluar
@endsection
@section('content')
<div class="card">  
    <h5 class="card-header">
        Data Surat Keluar
    </h5>
    <div class="card-body">
    <form action="/savesuratkeluar" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<label for="nomor_urut" class="form-label">Nomor Urut</label>
<input type="text" class="form-control" name="nomor_urut" id="nomor_urut" placeholder="Masukan Nomor Urut">
<div class="text-danger mt-1">
@error('nomor_urut')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_berkas" class="form-label">Nomor Berkas</label>
<input type="text" class="form-control" name="nomor_berkas" id="nomor_berkas" placeholder="Masukan Nomor Berkas">
<div class="text-danger mt-1">
@error('nomor_berkas')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="alamat_penerima" class="form-label">Alamat Penerima</label>
<input type="text" class="form-control" name="alamat_penerima" id="alamat_penerima" placeholder="Masukan Alamat Penerima">
<div class="text-danger mt-1">
@error('alamat_penerima')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="tanggal" class="form-label">Tanggal</label>
<input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Masukan Tanggal">
<div class="text-danger mt-1">
@error('tanggal')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="perihal" class="form-label">Perihal</label>
<input type="text" class="form-control" name="perihal" id="perihal" placeholder="Masukan Perihal">
<div class="text-danger mt-1">
@error('perihal')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor_petunjuk" class="form-label">Nomor Petunjuk</label>
<input type="text" class="form-control" name="nomor_petunjuk" id="nomor_petunjuk" placeholder="Masukan Nomor Petunjuk">
<div class="text-danger mt-1">
@error('nomor_petunjuk')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="nomor" class="form-label">Nomor</label>
<input type="text" class="form-control" name="nomor" id="nomor" placeholder="Masukan Nomor">
<div class="text-danger mt-1">
@error('nomor')
{{ $message }}
@enderror
</div>
</div>
<div class="text-end">
<a href="/suratkeluar" class="btn btn-secondary">Kembali</a>
<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
    </div>
</div>
@endsection