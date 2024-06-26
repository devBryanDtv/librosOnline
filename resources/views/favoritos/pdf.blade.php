<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Favoritos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Lista de Favoritos</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario ID</th>
                <th>Producto</th>
                <th>Fecha Agregado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($favoritos as $favorito)
            <tr>
                <td>{{ $favorito->id }}</td>
                <td>{{ $favorito->usuario_id }}</td>
                <td>{{ $favorito->producto->nombre_producto }}</td>
                <td>{{ $favorito->fecha_agregado }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
