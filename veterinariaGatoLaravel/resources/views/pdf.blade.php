<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Reporte de productos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 13px;
        }

        h1 {
            text-align: center;
            color: #2f6f5e;
        }

        .fecha {
            text-align: right;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #2f6f5e;
            color: white;
            padding: 8px;
        }

        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        .total {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>🐾 Patitas Felices</h1>

    <h2>Reporte de productos</h2>

    <p class="fecha">
        Fecha: {{ date('d/m/Y') }}
    </p>

    <table>

        <thead>
            <tr>
                <th>Producto</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>

        <tbody>

            @forelse($productos as $producto)

                <tr>
                    <td>{{ $producto->nombre }}</td>

                    <td>{{ $producto->categoria }}</td>

                    <td>
                        Bs {{ number_format($producto->precio, 2) }}
                    </td>

                    <td>
                        {{ $producto->stock }}
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="4">
                        No hay productos registrados.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

    <p class="total">
        Total de productos: {{ $productos->count() }}
    </p>

</body>
</html>