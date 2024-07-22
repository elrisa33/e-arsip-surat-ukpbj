@extends('layout')
@section('title')
    HOME ADMIN
@endsection
@section('content')
<section class="section dashboard">
<div class="row">

    <section>
        <div class="container mb-5 mt-5 justify-content-end">
        <a href="/" class="btn mb-2"></a>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
            <div class="card text-white card1" style="max-width: 100%;">
              <div class="card-header">Data surat masuk</div>
              <div class="card-body">
                <h1 class="card-title angka">2</h1>
              </div>
            </div>
            </div>

            <div class="col">
            <div class="card text-white card1" style="max-width: 100%;">
              <div class="card-header">Data surat keluar</div>
              <div class="card-body">
                <h1 class="card-title angka">2</h1>
              </div>
            </div>
            </div>

            <div class="col">
            <div class="card text-white card1" style="max-width: 100%;">
              <div class="card-header">Data User</div>
              <div class="card-body">
                <h1 class="card-title angka">2</h1>
              </div>
            </div>

        </div>
        </div>
        </div>

        </div>
        </section>
        @endsection
