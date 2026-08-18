<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | Patitas Felices</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <main>

        <section class="tarjeta">

            <h2>🐾 Patitas Felices</h2>

            <h3>Iniciar sesión</h3>
            <form method="POST" action="{{ route('login.procesar') }}">
                @csrf

                <label for="email">
                    Correo electrónico
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >

                <label for="password">
                    Contraseña
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >

                @if ($errors->any())
                    <p class="aviso error">
                        Correo o contraseña incorrectos.
                    </p>
                @endif

                <button type="submit">
                    Ingresar
                </button>

            </form>

        </section>

    </main>

</body>
</html>