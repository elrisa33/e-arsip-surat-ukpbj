@extends('layout')
@section('title')
    User
@endsection
@section('content')
<div class="pagetitle">
    <h1>Data User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item active">Beranda</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

    <!-- ini konten -->
<div class="card">
    <h5 class="card-header">
        Data User
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/createuser" class="btn btn-primary" type="button">Tambah User</a>
</div>
    </h5>
    <div>
        <table class="table table>striped table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Email</th>
                <th scope="col">Foto</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
@foreach ($users as $User)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>

                <td>{{ $User->nama}}</td>
                <td>{{ $User->jabatan}}</td>
                <td>{{ $User->email}}</td>
                <td><img src="{{ asset('storage/image/'. $User->foto)}}" alt="" width="120px"></td>
                <td><a href="/edituser/{{ $User->id}}" class="btn btn-primary">Edit</a></td>
                <td><a href="/deleteuser/{{ $User->id}}" class="btn btn-primary">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
