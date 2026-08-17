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

        <nav>
            <ul>
                <a href="{{ url('/') }}">Inicio</a>
                <li>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>


    <main>

        <section class="seccion-mascotas">

            <h2>
                <i class="fa-solid fa-id-card"></i>
                Registro de mascotas
            </h2>

            <p>
                Registra los datos de la mascota para generar su carnet
                de identificación veterinaria.
            </p>


            <!-- FORMULARIO -->

            <div class="tarjeta formulario-mascota">

                <h3>Registrar nueva mascota</h3>

                <form id="formMascota">

                    <label for="nombreMascota">
                        Nombre de la mascota
                    </label>

                    <input
                        type="text"
                        id="nombreMascota"
                        name="nombreMascota"
                        placeholder="Ej. Max"
                        required
                    >


                    <label for="especie">
                        Especie
                    </label>

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


                    <label for="raza">
                        Raza
                    </label>

                    <input
                        type="text"
                        id="raza"
                        name="raza"
                        placeholder="Ej. Labrador"
                        required
                    >


                    <label for="edad">
                        Edad
                    </label>

                    <input
                        type="number"
                        id="edad"
                        name="edad"
                        min="0"
                        placeholder="Ej. 3"
                        required
                    >


                    <label for="sexo">
                        Sexo
                    </label>

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
                        name="nombreDueno"
                        placeholder="Ej. Juan Pérez"
                        required
                    >


                    <label for="telefonoDueno">
                        Teléfono del propietario
                    </label>

                    <input
                        type="tel"
                        id="telefonoDueno"
                        name="telefonoDueno"
                        placeholder="Ej. 70000000"
                        required
                    >


                    <button type="submit">
                        <i class="fa-solid fa-plus"></i>
                        Registrar mascota
                    </button>

                </form>

            </div>


            <!-- CARNET -->

            <div class="tarjeta carnet-mascota">

                <h3>
                    <i class="fa-solid fa-id-card"></i>
                    Carnet de mascota
                </h3>

                <div class="carnet">

                    <div class="carnet-header">
                        <h2>🐾 SISTEMA VETERINARIA</h2>
                        <p>Carnet de identificación</p>
                    </div>


                    <div class="carnet-contenido">

                        <div class="foto-mascota">
                            <i class="fa-solid fa-paw"></i>
                        </div>


                        <div class="datos-mascota">

                            <p>
                                <strong>Nombre:</strong>
                                <span id="carnetNombre">
                                    —
                                </span>
                            </p>

                            <p>
                                <strong>Especie:</strong>
                                <span id="carnetEspecie">
                                    —
                                </span>
                            </p>

                            <p>
                                <strong>Raza:</strong>
                                <span id="carnetRaza">
                                    —
                                </span>
                            </p>

                            <p>
                                <strong>Edad:</strong>
                                <span id="carnetEdad">
                                    —
                                </span>
                            </p>

                            <p>
                                <strong>Sexo:</strong>
                                <span id="carnetSexo">
                                    —
                                </span>
                            </p>

                            <p>
                                <strong>Propietario:</strong>
                                <span id="carnetDueno">
                                    —
                                </span>
                            </p>

                            <p>
                                <strong>Teléfono:</strong>
                                <span id="carnetTelefono">
                                    —
                                </span>
                            </p>

                        </div>

                    </div>


                    <div class="carnet-footer">
                        <p>Documento de identificación veterinaria</p>
                    </div>

                </div>

            </div>

        </section>

    </main>


    <footer>
        <p>
            &copy; 2026 Sistema Veterinaria
        </p>
    </footer>


    <script>

        const formularioMascota =
            document.querySelector("#formMascota");


        formularioMascota.addEventListener("submit", function(event) {

            event.preventDefault();


            const nombre =
                document.querySelector("#nombreMascota").value;

            const especie =
                document.querySelector("#especie").value;

            const raza =
                document.querySelector("#raza").value;

            const edad =
                document.querySelector("#edad").value;

            const sexo =
                document.querySelector("#sexo").value;

            const dueno =
                document.querySelector("#nombreDueno").value;

            const telefono =
                document.querySelector("#telefonoDueno").value;


            document.querySelector("#carnetNombre").textContent =
                nombre;

            document.querySelector("#carnetEspecie").textContent =
                especie;

            document.querySelector("#carnetRaza").textContent =
                raza;

            document.querySelector("#carnetEdad").textContent =
                edad + " años";

            document.querySelector("#carnetSexo").textContent =
                sexo;

            document.querySelector("#carnetDueno").textContent =
                dueno;

            document.querySelector("#carnetTelefono").textContent =
                telefono;

        });

    </script>

</body>
</html>