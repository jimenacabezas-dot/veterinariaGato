<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>VPatitasFelices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#funciones">Funciones</a></li>
                <li><a href="#beneficios">Beneficios</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </nav>
        <button type="button" id="btn-tema" class="boton-modo">Modo Día ☀</button>
    </header>
    <main>
        <section id="inicio" class="bienvenida">
            <div class="bienvenida-contenido">
                <div>
                    <h2>🐾 Bienvenido a Veterinaria Patitas felices</h2>
                    <p class="descripcion">
                        Un sistema diseñado para facilitar la administración
                        de la veterinaria y mejorar el control de la información.
                    </p>
                    <p>
                        Administra productos, controla el inventario, registra
                        mascotas y organiza la información de forma rápida y sencilla.
                    </p>
                    
                </div>

            </div>

        </section>
        <section id="funciones">
            <h2>Funciones del sistema</h2>
            <div class="tarjetas">
                <article class="tarjeta">
                    <i class="fa-solid fa-box-open icono"></i>
                    <h3>Registro de productos</h3>
                    <p>Permite registrar medicamentos, vacunas, alimentos y otros insumos veterinarios.</p>
                    
                    <a href="{{ route('productos') }}" class="boton">Ver productos</a>
                </article>
                <article class="tarjeta">
                    <i class="fa-solid fa-box icono"></i>
                    <h3>Control de stock</h3>
                    <p>
                        Consulta el stock disponible de los productos registrados.
                    </p>

                    <p>
                        <strong>Productos registrados:</strong>
                        {{ $productos->count() }}
                    </p>

                    <p>
                        <strong>Stock total:</strong>
                        {{ $productos->sum('stock') }} unidades
                    </p>

                    <a href="{{ route('productos') }}" class="boton">
                        Ver stock
                    </a>
                </article>

                <article class="tarjeta">
                    <i class="fa-solid fa-calendar-check icono"></i>
                    <h3>Control de vencimientos</h3>
                    <p>Permite conocer qué productos están próximos a vencer o ya vencieron.</p>
                </article>

                <article class="tarjeta">
                    <i class="fa-solid fa-chart-column icono"></i>
                    <h3>Reportes</h3>
                    <p>Genera información sobre gastos, movimientos y productos más utilizados.</p>
                    <a href="{{ route('productos.pdf') }}"
                        class="boton"
                        target="_blank">
                            <i class="fa-solid fa-file-pdf"></i>
                            Ver reporte PDF
                    </a>
                </article>

                <article class="tarjeta">
                    <i class="fa-solid fa-id-card icono"></i>
                    <h3>Carnet de mascotas</h3>
                    <p>Registra los datos de cada mascota y genera un carnet para su identificación.</p>
                 <a href="{{ route('mascotas') }}" class="boton">
                    Ver carnet de mascotas
                </a>
                </article>
            </div>
        </section>
        <section id="beneficios">
            <h2>Beneficios</h2>
            <ul>
                <li>Mejora el control de inventarios</li>
                <li>Reduce perdidas por productos vencidos</li>
                <li>Facilita el registro de las mascotas</li>
                <li>Permite consultar informacion de manera rapida</li>
                <li>Organiza la administracion de la veterinaria</li>

            </ul>
        </section>
        <section id="contacto">
            <h2>Contacto</h2>
            <p><strong>Sistema:</strong> veterinaria</p>
            <p><strong>Correo:</strong> veterinaria@gmail.com</p>
            <p><strong>Teléfono:</strong> 70000000</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Veterinaria. Todos los derechos reservados.</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>