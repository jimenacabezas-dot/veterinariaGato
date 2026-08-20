<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Carnet de {{ $mascota->nombre }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 30px;
        }

        .carnet {
            width: 500px;
            margin: 30px auto;
            border: 3px solid #333;
            border-radius: 15px;
            padding: 25px;
            background-color: white;
            box-sizing: border-box;
        }
        .encabezado {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 15px;
        }

        .encabezado h1 {
            margin: 0;
            font-size: 20px;
        }

        .encabezado h2 {
            margin: 8px 0 0;
            font-size: 18px;
        }

        .contenido {
            margin-top: 20px;
        }

        .contenido h2 {
            text-align: center;
            font-size: 24px;
        }

        .dato {
            margin: 10px 0;
            font-size: 16px;
        }

        .propietario {
            margin-top: 20px;
            border-top: 2px solid #333;
            padding-top: 15px;
        }

        .pie {
            text-align: center;
            margin-top: 25px;
            font-size: 12px;
        }
        .logo {
            width: 90px;
            height: auto;
            margin: 10px auto;
        }
    </style>
</head>

<body>

    <div class="carnet">

        <div class="encabezado">
            <h1>PATITAS FELICES</h1>
            <img src="{{ public_path('img/logo.jpg') }}" alt="logo" class="logo">
            <h2>CARNET DE IDENTIFICACIÓN DE MASCOTA</h2>
        </div>

        <div class="contenido">

            <h2>{{ $mascota->nombre }}</h2>

            <p class="dato">
                <strong>Especie:</strong>
                {{ $mascota->especie }}
            </p>

            <p class="dato">
                <strong>Raza:</strong>
                {{ $mascota->raza }}
            </p>

            <p class="dato">
                <strong>Edad:</strong>
                {{ $mascota->edad }} años
            </p>

            <p class="dato">
                <strong>Sexo:</strong>
                {{ $mascota->sexo }}
            </p>

            <div class="propietario">

                <h3>Datos del propietario</h3>

                <p class="dato">
                    <strong>Nombre:</strong>
                    {{ $mascota->dueno }}
                </p>

                <p class="dato">
                    <strong>Teléfono:</strong>
                    {{ $mascota->telefono }}
                </p>

            </div>

        </div>

        <div class="pie">
            <p>Sistema Veterinaria Patitas Felices - 2026</p>
        </div>

    </div>

</body>
</html>