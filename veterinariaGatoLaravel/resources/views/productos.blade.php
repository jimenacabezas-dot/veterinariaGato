<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Productos |VPatitasFelices</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        <h1>🐾 Patitas Felices</h1>

        <nav>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Inicio</a>
                </li>

                <li>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>


    <main>

        <section id="productos">

            <h2>
                <i class="fa-solid fa-box-open"></i>
                Registro de productos
            </h2>

            <p>
                Registra los medicamentos, vacunas, alimentos
                y accesorios utilizados en la veterinaria.
            </p>
            <div class="tarjeta">
                <h3>Nuevo producto</h3>
                <div id="formulario" >
                       <form id="formProducto" novalidate
                        method="POST"
                        action="">
                            <label>Nombre del producto</label>
                            <input type="text" id="nombre" name="nombre" required>
                            <label>Categoría</label>
                            <select id="categoria" name="categoria" required>
                                <option>Medicamento</option>
                                <option>Vacuna</option>
                                <option>Alimento</option>
                                <option>Accesorio</option>
                            </select>
                            <label>Precio</label>
                            <input type="number" id="precio" name="precio" step="0.01" required   oninvalid="this.setCustomValidity('Ingrese un precio válido (solo números).')"
                            oninput="this.setCustomValidity('')">
                            <label>Stock</label>
                            <input name="stock" type="number" id="stock" required oninvalid="this.setCustomValidity('Ingrese una cantidad válida (solo números).')"
                            oninput="this.setCustomValidity('')">
                            <button type="submit">
                                <i class="fa-solid fa-floppy-disk"></i>
                                Guardar producto
                            </button>
                            <p id="mensaje-producto" class="aviso"></p>
                        </form>
                    </div>
            </div>

        </section>

    </main>


    <footer>
        <p>
            &copy; 2026 Sistema Veterinaria
        </p>
    </footer>

</body>
</html>