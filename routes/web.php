<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Laporancontroller;
use App\Http\Controllers\Suratmasukcontroller;
use App\Http\Controllers\Suratkeluarcontroller;
use App\Http\Controllers\Controller;

// admin
Route::get('/berandaadmin', function () {
    return view('admin.index');
});

// USER
Route::get('/user', [UserController::class, 'index']);
Route::get('/createuser', [Usercontroller::class, 'create']);
Route::post('/saveuser', [Usercontroller::class, 'store']);
Route::get('/edituser/{id}', [Usercontroller::class, 'edit']);
Route::put('/updateuser/{id}', [Usercontroller::class, 'update']);
Route::get('/deleteuser/{id}', [Usercontroller::class, 'destroy']);

// SURAT MASUK
Route::get('/suratmasuk', [Suratmasukcontroller::class, 'index']);
Route::get('/createsuratmasuk', [Suratmasukcontroller::class, 'create']);
Route::post('/savesuratmasuk', [Suratmasukcontroller::class, 'store']);
Route::get('/editsuratmasuk/{id}', [Suratmasukcontroller::class, 'edit']);
Route::put('/updatesuratmasuk/{id}', [Suratmasukcontroller::class, 'update']);
Route::get('/deletesuratmasuk/{id}', [Suratmasukcontroller::class, 'destroy']);

// SURAT KELUAR
Route::get('/suratkeluar', [Suratkeluarcontroller::class, 'index']);
Route::get('/createsuratkeluar', [Suratkeluarcontroller::class, 'create']);
Route::post('/savesuratkeluar', [Suratkeluarcontroller::class, 'store']);
Route::get('/editsuratkeluar/{id}', [Suratkeluarcontroller::class, 'edit']);
Route::put('/updatesuratkeluar/{id}', [Suratkeluarcontroller::class, 'update']);
Route::get('/deletesuratkeluar/{id}', [Suratkeluarcontroller::class, 'destroy']);

// LAPORAN
Route::get('/laporan', [Laporancontroller::class, 'index']);
Route::get('/createlaporan', [Laporancontroller::class, 'create']);
Route::post('/savelaporan', [Laporancontroller::class, 'store']);
Route::get('/editlaporan/{id}', [Laporancontroller::class, 'edit']);
Route::put('/updatelaporan/{id}', [Laporancontroller::class, 'update']);
Route::get('/deletelaporan/{id}', [Laporancontroller::class, 'destroy']);