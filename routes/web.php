<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Controller;

// BERANDA
Route::get('/beranda', function () {
    return view('index');
});

// Login
Route::get('/login', function () {
    return view('login.login');
});

// USER
Route::get('/user', [UserController::class, 'index']);
Route::get('/createuser', [UserController::class, 'create']);
Route::post('/saveuser', [UserController::class, 'store']);
Route::get('/edituser/{id}', [UserController::class, 'edit']);
Route::put('/updateuser/{id}', [UserController::class, 'update']);
Route::get('/deleteuser/{id}', [UserController::class, 'destroy']);

// SURAT MASUK
Route::get('/suratmasuk', [SuratmasukController::class, 'index']);
Route::get('/createsuratmasuk', [SuratmasukController::class, 'create']);
Route::post('/savesuratmasuk', [SuratmasukController::class, 'store']);
Route::get('/editsuratmasuk/{id}', [SuratmasukController::class, 'edit']);
Route::put('/updatesuratmasuk/{id}', [SuratmasukController::class, 'update']);
Route::get('/deletesuratmasuk/{id}', [SuratmasukController::class, 'destroy']);

// SURAT KELUAR
Route::get('/suratkeluar', [SuratkeluarController::class, 'index']);
Route::get('/createsuratkeluar', [SuratkeluarController::class, 'create']);
Route::post('/savesuratkeluar', [SuratkeluarController::class, 'store']);
Route::get('/editsuratkeluar/{id}', [SuratkeluarController::class, 'edit']);
Route::put('/updatesuratkeluar/{id}', [SuratkeluarController::class, 'update']);
Route::get('/deletesuratkeluar/{id}', [SuratkeluarController::class, 'destroy']);

// LAPORAN
Route::get('/laporansk', [LaporanController::class, 'suratkeluar']);
Route::get('/laporansm', [LaporanController::class, 'suratmasuk']);
