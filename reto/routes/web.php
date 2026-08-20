<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\LoginController;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade\Pdf;
//iniciar seccion
Route::get('/', function () {
    return redirect()->route('login');
});
//paguina principal
Route::get('/inicio', function () {
    $productos = Producto::all();
    return view('index', compact('productos'));
})->name('inicio');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
// GET para mostrar las mascotas
Route::get('/mascotas', [MascotaController::class, 'index'])
    ->name('mascotas');

// POST para crear
Route::post('/mascotas', [MascotaController::class, 'store'])
    ->name('mascotas.store');

// GET para mostrar el formulario de edición
Route::get('/mascotas/{id}/edit', [MascotaController::class, 'edit'])
    ->name('mascotas.edit');

// PUT para actualizar
Route::put('/mascotas/{id}', [MascotaController::class, 'update'])
    ->name('mascotas.update');

// DELETE para eliminar
Route::delete('/mascotas/{id}', [MascotaController::class, 'destroy'])
    ->name('mascotas.destroy');
//Productos
Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos');

Route::post('/productos', [ProductoController::class, 'store'])
    ->name('productos.store');
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])
    ->name('productos.edit');

Route::put('/productos/{id}', [ProductoController::class, 'update'])
    ->name('productos.update');

//login
Route::get('/login', [LoginController::class, 'mostrarLogin'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.procesar');
//pdf productos
Route::get('/productos/pdf', function () {

    $productos = Producto::all();

    $pdf = Pdf::loadView('productos.pdf', compact('productos'));

    return $pdf->stream('reporte-productos.pdf');

})->name('productos.pdf');

//pdf carnet de mascotas 
Route::get('/mascotas/{id}/carnet', function ($id) {

    $mascota = \App\Models\Mascota::findOrFail($id);

    $pdf = Pdf::loadView('mascotas.carnet', compact('mascota'));

    return $pdf->stream('carnet-' . $mascota->nombre . '.pdf');

})->name('mascotas.carnet');