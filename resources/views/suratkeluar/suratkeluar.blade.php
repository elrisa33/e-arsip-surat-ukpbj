@extends('layout')
@section('title')
    Surat Keluar
@endsection
@section('content')
<div class="pagetitle">
    <h1>Arsip Surat Keluar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Surat Keluar</a></li>
        <li class="breadcrumb-item active">Beranda</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

    <!-- ini konten -->
<div class="card">
    <h5 class="card-header">
        Data Surat Keluar
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/createsuratkeluar" class="btn btn-primary" type="button">Tambah Data Surat Keluar</a>
</div>
    </h5>
    <div>
        <table class="table table>striped table-hover">
            <thead>
              <tr>
                <th scope="col">Nomor Urut</th>
                <th scope="col">Nomor Berkas</th>
                <th scope="col">Alamat Penerima</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Perihal</th>
                <th scope="col">Nomor Petunjuk</th>
                <th scope="col">Nomor</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
@foreach ($suratkeluars as $Suratkeluar)
              <tr>
                <td>{{ $Suratkeluar->nomorurut_sk}}</td>
                <td>{{ $Suratkeluar->nomorberkas_sk}}</td>
                <td>{{ $Suratkeluar->alamat_penerima}}</td>
                <td>{{ $Suratkeluar->tanggal_sk}}</td>
                <td>{{ $Suratkeluar->perihal_sk}}</td>
                <td>{{ $Suratkeluar->nomorpetunjuk_sk}}</td>
                <td>{{ $Suratkeluar->nomor_sk}}</td>
                <td><a href="/editsuratkeluar/{{ $Suratkeluar->id}}" class="btn btn-primary">Edit</a></td>
                <td><a href="/deletesuratkeluar/{{ $Suratkeluar->id}}" class="btn btn-primary">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
