<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ofertas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h1, h2 {
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 24px;
        }
        h2 {
            font-size: 20px;
            color: #555;
        }
        .contenido {
            font-size: 14px;
        }
        .seccion {
            margin-bottom: 20px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }
        .oferta {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .oferta p {
            margin: 5px 0;
        }
        .oferta p strong {
            color: #444;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 20px;
        }
    </style>





</head>


<body>
    <h1>Ofertas</h1>
    <div class="contenido">
        <div class="seccion">
            <h2>Ofertas Activas</h2>
            @foreach ($ofertasActivas as $oferta)
                <div class="oferta" id="oferta-{{ $oferta->id }}">
                    <p><strong>Producto:</strong> {{ $oferta->producto->nombre }}</p>
                    <p><strong>Título:</strong> {{ $oferta->titulo }}</p>
                    <p><strong>Descripción:</strong> {{ $oferta->descripcion }}</p>
                    <p><strong>Descuento:</strong> {{ $oferta->descuento }}%</p>
                    <p><strong>Precio de Oferta:</strong> ${{ number_format($oferta->precio_oferta, 2) }}</p>
                    <p><strong>Fecha de Inicio:</strong> {{ \Carbon\Carbon::parse($oferta->fecha_inicio)->format('d/m/Y') }}</p>
                    <p><strong>Fecha de Fin:</strong> {{ \Carbon\Carbon::parse($oferta->fecha_fin)->format('d/m/Y') }}</p>
                </div>
            @endforeach
        </div>
        <div class="seccion">
            <h2>Ofertas Inactivas</h2>
            @foreach ($ofertasInactivas as $oferta)
                <div class="oferta" id="oferta-{{ $oferta->id }}">
                    <p><strong>Producto:</strong> {{ $oferta->producto->nombre }}</p>
                    <p><strong>Título:</strong> {{ $oferta->titulo }}</p>
                    <p><strong>Descripción:</strong> {{ $oferta->descripcion }}</p>
                    <p><strong>Descuento:</strong> {{ $oferta->descuento }}%</p>
                    <p><strong>Precio de Oferta:</strong> ${{ number_format($oferta->precio_oferta, 2) }}</p>
                    <p><strong>Fecha de Inicio:</strong> {{ \Carbon\Carbon::parse($oferta->fecha_inicio)->format('d/m/Y') }}</p>
                    <p><strong>Fecha de Fin:</strong> {{ \Carbon\Carbon::parse($oferta->fecha_fin)->format('d/m/Y') }}</p>
                </div>
            @endforeach
        </div>
        <p class="footer">{{ $today }}</p>
    </div>
</body>
</html>
