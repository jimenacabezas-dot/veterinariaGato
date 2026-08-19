@extends('layouts.base')

@section('content')

<h1>Libreria El Lapiz</h1>

<p>
    Librería El Lápiz ofrece libros para estudiantes y lectores de la comunidad.
    Nuestro catálogo reúne opciones para diferentes gustos y necesidades.
</p>

<p>Hay {{ count($libros) }} libros en el catálogo.</p>

@foreach ($libros as $libro)
    <div>
        <h2>{{ $libro->titulo }}</h2>
        <p>Precio: Bs {{ $libro->precio }}</p>
    </div>
@endforeach

<p>Catálogo atendido por Jimena Cabezas</p>

<a href="/libros/nuevo">Registrar nuevo libro</a>

@endsection