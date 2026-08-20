<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto -VPatitasFelices</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        <h1>🐾 Patitas Felices</h1>

        <nav>
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('/contacto') }}">Contacto</a>
        </nav>
    </header>

    <main>

        <section id="contacto">
            <h2>Contacto</h2>

            <form>
                <label for="nombre-contacto">Nombre:</label><br>
                <input type="text" id="nombre-contacto" name="nombre">

                <label for="correo">Correo electrónico:</label><br>
                <input type="email" id="correo" name="correo" required><br><br>

                <label for="mensaje">Mensaje:</label><br>
                <textarea
                    id="mensaje"
                    name="mensaje"
                    rows="5"
                    cols="40"
                    placeholder="Escriba su mensaje">
                </textarea><br><br>

                <button type="submit">Enviar</button>
            </form>

            <p><strong>Sistema:</strong> Veterinaria</p>
            <p><strong>Correo:</strong> veterinaria@gmail.com</p>
            <p><strong>Teléfono:</strong> 70000000</p>

        </section>

    </main>

    <footer>
        <p>© 2026 Sistema Veterinaria</p>
    </footer>

</body>
</html>