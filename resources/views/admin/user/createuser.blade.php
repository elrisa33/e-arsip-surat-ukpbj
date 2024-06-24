@extends('admin.layout')
@section('title')
    create user
@endsection
@section('content')
<div class="card">  
    <h5 class="card-header">
        Data User
    </h5>
    <div class="card-body">
    <form action="/saveuser" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<label for="nama" class="form-label">Nama User</label>
<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan User">
<div class="text-danger mt-1">
@error('nama')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="jabatan" class="form-label">Jabatan</label>
<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan">
<div class="text-danger mt-1">
@error('jabatan')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="email" class="form-label">Email User</label>
<input type="text" class="form-control" name="email" id="email" placeholder="Email User">
<div class="text-danger mt-1">
@error('email')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="text" class="form-control" name="password" id="password" placeholder="Masukan Password">
<div class="text-danger mt-1">
@error('password')
{{ $message }}
@enderror
</div>
</div>
<div class="mb-3">
<label for="foto" class="form-label">Foto</label>
<input type="file" class="form-control" name="foto" id="foto" accept="image/*">
<div class="text-danger mt-1">
@error('foto')
{{ $message }}
@enderror
</div>
</div>
<div class="text-end">
<a href="/user" class="btn btn-secondary">Kembali</a>
<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
    </div>
</div>
@endsection