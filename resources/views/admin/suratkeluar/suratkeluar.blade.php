@extends('admin.layout')
@section('title')
    Surat Keluar
@endsection
@section('content')
<div class="card">  
    <h5 class="card-header">
        Data Surat Keluar
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/createsuratmasuk" class="btn btn-primary" type="button">Tambah Data Surat Keluar</a>
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
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $Suratkeluar->nomor_urut}}</td>
                <td>{{ $Suratkeluar->nomor_berkas}}</td>
                <td>{{ $Suratkeluar->alamat_penerima}}</td>
                <td>{{ $Suratkeluar->tanggal}}</td>
                <td>{{ $Suratkeluar->perihal}}</td>
                <td>{{ $Suratkeluar->nomor_petunjuk}}</td>
                <td>{{ $Suratkeluar->nomor}}</td>
                <td><a href="/editsuratkeluar/{{ $Suratkeluar->id}}" class="btn btn-primary">Edit</a></td>
                <td><a href="/deletesuratkeluar/{{ $Suratkeluar->id}}" class="btn btn-primary">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection