<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Carnet de mascotas | VPatitasFelices</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        <h1>🐾 Patitas Felices</h1>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon"> ☰</label>
        <nav>
            <ul>
                <a href="{{ url('/') }}">Inicio</a>
                <li>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </li>
                <button type="button" id="btn-tema" class="boton-modo">Modo Día ☀</button>
            </ul>
        </nav>
    </header>
    <main>
        <section class="seccion-mascotas">
            <div class="titulo-lista">
                <h2>
                    <i class="fa-solid fa-paw"></i>
                    Mascotas registradas
                </h2>

               <button type="button"
                    class="boton"
                        onclick="mostrarFormulario('formularioMascota', 'nombreMascota')">
                    <i class="fa-solid fa-plus"></i>
                    Nueva mascota
                </button>
            </div>

            <div class="tarjeta formulario-mascota"
                id="formularioMascota"
                style="display: none;">

                <h3>Registrar nueva mascota</h3>

                <form id="formMascota" method="POST" 
                action="{{ route('mascotas.store') }}" >
                    @csrf
                    <label for="nombreMascota">
                        Nombre de la mascota
                    </label>

                    <input
                        type="text"
                        id="nombreMascota"
                        name="nombre"
                        placeholder="Ej. Max"
                        required
                    >
                    <label for="especie"> Especie </label>

                    <select
                        id="especie"
                        name="especie"
                        required
                    >
                        <option value="">Seleccione una especie</option>
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                        <option value="Ave">Ave</option>
                        <option value="Conejo">Conejo</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <label for="raza">Raza</label>
                    <input
                        type="text"
                        id="raza"
                        name="raza"
                        placeholder="Ej. Labrador"
                        required
                    >
                    <label for="edad">Edad</label>
                    <input
                        type="number"
                        id="edad"
                        name="edad"
                        min="0"
                        placeholder="Ej. 3"
                        required
                    >
                    <label for="sexo">Sexo</label>
                    <select
                        id="sexo"
                        name="sexo"
                        required
                    >
                        <option value="">Seleccione</option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>


                    <label for="nombreDueno">
                        Nombre del propietario
                    </label>
                    <input
                        type="text"
                        id="nombreDueno"
                        name="dueno"
                        placeholder="Ej. Juan Pérez"
                        required
                    >
                    <label for="telefonoDueno">
                        Teléfono del propietario
                    </label>
                    <input
                         type="text"
                        id="telefonoDueno"
                        name="telefono"
                        placeholder="Ej. 70000000"
                        required
                        inputmode="numeric"
                        pattern="[0-9]{8}"
                        maxlength="8"
                        
                    >
                    <button type="submit">
                        <i class="fa-solid fa-plus"></i>
                        Registrar mascota
                    </button>
                </form>
            </div>
            
            <h2>Mascotas registradas</h2>

            <div class="tarjetas">
                @forelse($mascotas as $mascota)
                    <div class="tarjeta">
                        <i class="fa-solid fa-paw icono"></i>
                        <h3>{{ $mascota->nombre }}</h3>
                        <p><strong>Especie:</strong> {{ $mascota->especie }}</p>
                        <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
                        <p><strong>Edad:</strong> {{ $mascota->edad }} años</p>
                        <p><strong>Sexo:</strong> {{ $mascota->sexo }}</p>
                        <p><strong>Propietario:</strong> {{ $mascota->dueno }}</p>
                        <p><strong>Teléfono:</strong> {{ $mascota->telefono }}</p>
                        <div class="botones-mascota">
                            <!-- Ver carnet -->
                            <a href="{{ route('mascotas.carnet', $mascota->id) }}" target="_blank">
                                <button type="button">
                                    <i class="fa-solid fa-id-card"></i>
                                    Carnet
                                </button>
                            </a>
                            <!-- Editar -->
                            <a href="{{ route('mascotas.edit', $mascota->id) }}">
                                <button type="button">
                                    <i class="fa-solid fa-pen"></i>
                                    Editar
                                </button>
                            </a>
                            <!-- Eliminar -->
                            <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                    Eliminar
                                </button>
                            </form>

                        </div>
                    </div>
                   
                @empty

                    <p>No hay mascotas registradas todavía.</p>

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