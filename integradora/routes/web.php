<?php

use Illuminate\Support\Facades\Route;
use App\Models\Libro;

Route::get('/', function () {
    return redirect('/libros');
});
Route::get('/libros', function () {
    $libros = Libro::all();

    return view('libros.lista', compact('libros'));
});

Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
});

Route::post('/libros/nuevo', function () {

    $datos = request()->validate(
        [
            'titulo' => 'required',
            'precio' => 'required|integer'
        ],
        [
            'titulo.required' => 'Falta el título del libro.',
            'precio.required' => 'Falta el precio del libro.',
            'precio.integer' => 'Ese precio no es un número entero.'
        ]
    );

    Libro::create([
        'titulo' => $datos['titulo'],
        'precio' => $datos['precio']
    ]);

    return redirect('/libros');
});