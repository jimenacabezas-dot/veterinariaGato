<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto | Patitas Felices</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        <div class="marca">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
            <h1>Patitas Felices</h1>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('inicio') }}">Inicio</a>
                </li>

                <li>
                    <a href="{{ route('productos') }}">Productos</a>
                </li>

                <li>
                    <a href="{{ route('mascotas') }}">Mascotas</a>
                </li>

                <li>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>

        <section class="gestion-productos">

            <div class="titulo-productos">

                <h2>
                    <i class="fa-solid fa-pen-to-square"></i>
                    Editar producto
                </h2>

                <p>
                    Modifica los datos del producto seleccionado.
                </p>

            </div>

            <div class="tarjeta formulario-producto">

                <form method="POST"
                      action="{{ route('productos.update', $producto->id) }}">

                    @csrf
                    @method('PUT')

                    <label for="nombre">
                        Nombre del producto
                    </label>

                    <input type="text"
                           id="nombre"
                           name="nombre"
                           value="{{ $producto->nombre }}"
                           required>


                    <label for="categoria">
                        Categoría
                    </label>

                    <select id="categoria"
                            name="categoria"
                            required>

                        <option value="Medicamento"
                            {{ $producto->categoria == 'Medicamento' ? 'selected' : '' }}>
                            Medicamento
                        </option>

                        <option value="Vacuna"
                            {{ $producto->categoria == 'Vacuna' ? 'selected' : '' }}>
                            Vacuna
                        </option>

                        <option value="Alimento"
                            {{ $producto->categoria == 'Alimento' ? 'selected' : '' }}>
                            Alimento
                        </option>

                        <option value="Accesorio"
                            {{ $producto->categoria == 'Accesorio' ? 'selected' : '' }}>
                            Accesorio
                        </option>

                    </select>


                    <label for="precio">
                        Precio
                    </label>

                    <input type="number"
                           id="precio"
                           name="precio"
                           value="{{ $producto->precio }}"
                           step="0.01"
                           min="0"
                           required>


                    <label for="stock">
                        Stock
                    </label>

                    <input type="number"
                           id="stock"
                           name="stock"
                           value="{{ $producto->stock }}"
                           min="0"
                           required>


                    <button type="submit">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Guardar cambios
                    </button>

                    <a href="{{ route('productos') }}" class="boton">
                        <i class="fa-solid fa-arrow-left"></i>
                        Cancelar
                    </a>

                </form>

            </div>

        </section>

    </main>

    <footer>
        <p>
            &copy; 2026 Sistema Veterinaria
        </p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>