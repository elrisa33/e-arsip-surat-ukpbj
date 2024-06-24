@extends('admin.layout')
@section('title')
    update user
@endsection
@section('content')
<div class="card">  
    <h5 class="card-header">
        Update User
    </h5>
    <div class="card-body">
    <form action="/updateuser" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf
<div class="mb-3">
<label for="nama" class="form-label">Nama User</label>
<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan User" value="{{ $User->name }}">
<div class="text-danger mt-1">
@error('nama')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="jabatan" class="form-label">Jabatan</label>
<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan"  value="{{ $User->jabatan }}">
<div class="text-danger mt-1">
@error('jabatan')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="email" class="form-label">Email User</label>
<input type="text" class="form-control" name="email" id="email" placeholder="Email User" value="{{ $User->email }}">
<div class="text-danger mt-1">
@error('email')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="text" class="form-control" name="password" id="password" placeholder="Masukan Password" value="{{ $User->password }}">
<div class="text-danger mt-1">
@error('password')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="foto" class="form-label">Ganti Foto</label>
<input type="hidden" name="foto_lama" value="{{ $User->foto }}">
<input type="file" class="form-control @error ('foto') is-invalid @enderror" id="foto" name="foto" accept="image/*" value="{{ old('foto')}}">
<div id="fotoFeedback" class="invalid-feedback">
@error('foto')
{{ $message }}
@enderror
</div>
</div>
<div class="text-end">
<a href="/user" class="btn btn-secondary">Kembali</a>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
    </div>
</div>
@endsection