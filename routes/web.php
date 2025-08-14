<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Jane Doe']);
});

Route::get('/barang', function () {
    return view('data', [
        'title' => 'Barang',
        'items' => Barang::all(),
    ]);
});
