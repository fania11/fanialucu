<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'beranda');
});

Route::get('/barang', function () {
    return view(view: 'barang');
});

Route::get('/beli', function () {
    return view(view: 'beli');
});
