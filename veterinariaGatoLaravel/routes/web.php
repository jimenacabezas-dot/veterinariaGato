<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\LoginController;
use App\Models\Producto;
Route::get('/', function () {
    $productos = Producto::all();
    return view('index', compact('productos'));
});
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/mascotas', [MascotaController::class, 'index'])
    ->name('mascotas');

Route::post('/mascotas', [MascotaController::class, 'store'])
    ->name('mascotas.store');

Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos');

Route::post('/productos', [ProductoController::class, 'store'])
    ->name('productos.store');


Route::get('/login', [LoginController::class, 'mostrarLogin'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.procesar');