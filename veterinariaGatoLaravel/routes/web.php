<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('/mascotas', function () {
    return view('mascotas');
})->name('mascotas');
Route::get('/productos', function () {
    return view('productos');
})->name('productos');