<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Veterinaria</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-info">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
            <h1>Veterinaria</h1>
            <p>
                Bienvenido al sistema de gestión veterinaria.
                Inicia sesión para continuar.
            </p>
        </div>

        <div class="login-form">

            <h2>Iniciar sesión</h2>

            <p class="subtitulo">
                Ingresa tus datos para acceder
            </p>

            @if ($errors->any())
                <div class="errores">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('login.procesar') }}" method="POST">
                @csrf
                <div class="campo">
                    <label for="email">Correo electrónico</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="correo@ejemplo.com"
                        required
                    >
                </div>
                <div class="campo">
                    <label for="password">Contraseña</label>
                    <div class="password">
                        <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Ingresa tu contraseña"
                        required
                    >
                    <button type="button" onclick="mostrarPassword()">👁️</button>
                    </div>
                    
                </div>
                <button type="submit" class="btn-login">
                    Iniciar sesión
                </button>
            </form>
        </div>
    </div>
    <script>
        function mostrarPassword() {
            let password = document.getElementById("password");

            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
        </script>
</body>
</html>