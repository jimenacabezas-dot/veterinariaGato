<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar libro</title>
</head>
<body>

<h1>Registrar nuevo libro</h1>

<form method="POST" action="/libros/nuevo">
    @csrf
    <div>
        <label>Título:</label>
        <input type="text" name="titulo" value="{{ old('titulo') }}">

        @error('titulo')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <br>
    <div>
        <label>Precio:</label>
        <input type="number" name="precio" value="{{ old('precio') }}">

        @error('precio')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <br>
    <button type="submit">Guardar libro</button>

</form>

<br>

<a href="/libros">Volver a la lista</a>

</body>
</html>