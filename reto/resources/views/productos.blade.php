<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | Patitas Felices</title>
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
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon"> ☰</label>
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Inicio</a>
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
            <button type="button" id="btn-tema" class="boton-modo">Modo Día ☀</button>
        </nav>

    </header>
    <main>

        <section class="gestion-productos">

            <div class="titulo-productos">

                <h2>
                    <i class="fa-solid fa-box-open"></i>
                    Gestión de productos
                </h2>
                <p>
                    Administra los productos de la veterinaria
                    y controla su stock.
                </p>
            </div>
            <!-- RESUMEN -->
            <div class="resumen-productos">
                <div class="resumen-card">
                    <i class="fa-solid fa-box"></i>
                    <div>
                        <strong>{{ $productos->count() }}</strong>
                        <span>Productos</span>
                    </div>
                </div>
                <div class="resumen-card">
                    <i class="fa-solid fa-layer-group"></i>
                    <div>
                        <strong>{{ $productos->pluck('categoria')->unique()->count() }}</strong>
                        <span>Categorías</span>
                    </div>

                </div>
                <div class="resumen-card">
                    <i class="fa-solid fa-warehouse"></i>
                    <div>
                        <strong>{{ $productos->sum('stock') }}</strong>
                        <span>Unidades en stock</span>
                    </div>
                </div>
            </div>
            <!-- PRODUCTOS REGISTRADOS -->
            <div class="titulo-lista">
                <h2>
                    <i class="fa-solid fa-list"></i>
                    Productos registrados
                </h2>
                <button type="button"
                        class="boton"
                        onclick="mostrarFormulario('formularioProducto', 'nombre')">
                    <i class="fa-solid fa-plus"></i>
                    Nuevo producto
                </button>

            </div>
            <!-- FORMULARIO -->
            <div id="formularioProducto"
                 class="tarjeta formulario-producto"
                 style="display: none;">

                <h3>
                    <i class="fa-solid fa-plus"></i>
                    Registrar nuevo producto
                </h3>


                <div id="formulario" >
                    <form id="formProducto" novalidate
                        method="POST"
                        action="{{ route('productos.store') }}">
                        <!-- Token de seguridad -->
                         @csrfs
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


            <!-- LISTA DE PRODUCTOS -->

            <div class="lista-productos">

                @forelse($productos as $producto)
                    <article class="producto-card">
                        <div class="producto-icono">
                            <i class="fa-solid fa-box"></i>
                        </div>
                        <div class="producto-info">
                            <h3>
                                {{ $producto->nombre }}
                            </h3>
                            <p>
                                <strong>Categoría:</strong>
                                {{ $producto->categoria }}
                            </p>

                            <p>
                                <strong>Precio:</strong>
                                Bs {{ number_format($producto->precio, 2) }}
                            </p>

                            <p>
                                <strong>Stock:</strong>
                                {{ $producto->stock }} unidades
                            </p>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="boton-editar">
                                <i class="fa-solid fa-pen"></i>
                                Editar
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="sin-productos">
                        <i class="fa-solid fa-box-open"></i>
                        <h3>
                            No hay productos registrados
                        </h3>
                        <p>
                            Presiona "Nuevo producto" para registrar
                            el primer producto.
                        </p>
                    </div>
                @endforelse
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