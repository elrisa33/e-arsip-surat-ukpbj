@extends('layout')
@section('title')
    Surat Masuk
@endsection
@section('content')
  <div class="pagetitle">
    <h1>Arsip Surat Masuk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Surat Masuk</a></li>
        <li class="breadcrumb-item active">Beranda</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

    <!-- ini konten -->
    <div class="card">
    <h5 class="card-header">
        Data Surat Masuk
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/createsuratmasuk" class="btn btn-primary" type="button">Tambah Data Surat Masuk</a>
</div>
    </h5>
    <div>
        <table class="table table>striped table-hover">
            <thead>
              <tr>
                <th scope="col">Nomor Urut</th>
                <th scope="col">Nomor Berkas</th>
                <th scope="col">Alamat Pengirim</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nomor</th>
                <th scope="col">Perihal</th>
                <th scope="col">Nomor Petunjuk</th>
                <th scope="col">Nomor Paket</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($suratmasuks as $Suratmasuk)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $Suratmasuk->nomorberkas_sm}}</td>
                <td>{{ $Suratmasuk->alamat_pengirim}}</td>
                <td>{{ $Suratmasuk->tanggal_sm}}</td>
                <td>{{ $Suratmasuk->nomor_sm}}</td>
                <td>{{ $Suratmasuk->perihal_sm}}</td>
                <td>{{ $Suratmasuk->nomorpetunjuk_sm}}</td>
                <td>{{ $Suratmasuk->nomor_paket}}</td>
                <td><a href="/editsuratmasuk/{{ $Suratmasuk->id}}" class="btn btn-primary">Edit</a></td>
                <td><a href="/deletesuratmasuk/{{ $Suratmasuk->id}}" class="btn btn-primary">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>


@endsection
