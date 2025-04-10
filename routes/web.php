<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PetugasController;

Route::get('/', function () {
    return view('home');
});

Route::get('login', [PetugasController::class, 'ceklogin']);
Route::post('login', [PetugasController::class, 'postlogin']);
Route::get('logout', [PetugasController::class, 'logout']);


Route::resource('barang', BarangController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('petugas', PetugasController::class);

