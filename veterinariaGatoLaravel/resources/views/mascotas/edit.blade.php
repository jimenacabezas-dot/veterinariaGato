<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar mascota | Patitas Felices</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<header>
    <h1>🐾 Patitas Felices</h1>
</header>

<main>
    <section class="seccion-mascotas">
        <h2>Editar mascota</h2>
        <div class="tarjeta">
            <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="nombre">Nombre de la mascota</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    value="{{ $mascota->nombre }}"
                    required
                >
                <label for="especie">Especie</label>

                <select id="especie" name="especie" required>
                    <option value="Perro" {{ $mascota->especie == 'Perro' ? 'selected' : '' }}>
                        Perro
                    </option>

                    <option value="Gato" {{ $mascota->especie == 'Gato' ? 'selected' : '' }}>
                        Gato
                    </option>

                    <option value="Ave" {{ $mascota->especie == 'Ave' ? 'selected' : '' }}>
                        Ave
                    </option>

                    <option value="Conejo" {{ $mascota->especie == 'Conejo' ? 'selected' : '' }}>
                        Conejo
                    </option>

                    <option value="Otro" {{ $mascota->especie == 'Otro' ? 'selected' : '' }}>
                        Otro
                    </option>
                </select>
                <label for="raza">Raza</label>
                <input
                    type="text"
                    id="raza"
                    name="raza"
                    value="{{ $mascota->raza }}"
                    required
                >
                <label for="edad">Edad</label>
                <input
                    type="number"
                    id="edad"
                    name="edad"
                    value="{{ $mascota->edad }}"
                    min="0"
                    required
                >
                <label for="sexo">Sexo</label>

                <select id="sexo" name="sexo" required>

                    <option value="Macho" {{ $mascota->sexo == 'Macho' ? 'selected' : '' }}>
                        Macho
                    </option>

                    <option value="Hembra" {{ $mascota->sexo == 'Hembra' ? 'selected' : '' }}>
                        Hembra
                    </option>

                </select>

                <label for="dueno">Nombre del propietario</label>

                <input
                    type="text"
                    id="dueno"
                    name="dueno"
                    value="{{ $mascota->dueno }}"
                    required
                >

                <label for="telefono">Teléfono del propietario</label>

                <input
                    type="text"
                    id="telefono"
                    name="telefono"
                    value="{{ $mascota->telefono }}"
                    maxlength="8"
                    required
                >

                <button type="submit">
                    Guardar cambios
                </button>

                <a href="{{ route('mascotas') }}">
                    Cancelar
                </a>

            </form>

        </div>

    </section>

</main>

</body>
</html>