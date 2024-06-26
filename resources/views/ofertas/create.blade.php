@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Oferta</h1>

    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id" class="form-control">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre_producto }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3" style="display:none;">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" readonly>
        </div>
        <div class="form-group mb-3">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="descuento">Descuento (%)</label>
            <input type="number" name="descuento" id="descuento" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="precio_oferta">Precio Oferta</label>
            <input type="number" name="precio_oferta" id="precio_oferta" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="fecha_fin">Fecha Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Oferta</button>
    </form>
</div>

<script>
    // JavaScript para actualizar dinámicamente el campo de título al cargar la página
    document.addEventListener('DOMContentLoaded', function () {
        // Función para actualizar el campo de título
        function actualizarTitulo() {
            var productoIdSelect = document.getElementById('producto_id');
            var tituloInput = document.getElementById('titulo');

            var selectedProductId = productoIdSelect.value;
            var selectedProduct = productoIdSelect.options[productoIdSelect.selectedIndex].text;

            // Actualizar el campo de título con el nombre del producto seleccionado
            tituloInput.value = selectedProduct;
        }

        // Llamar a la función al cargar la página para inicializar el campo de título
        actualizarTitulo();

        // Agregar evento al cambio del producto para actualizar el título dinámicamente
        productoIdSelect.addEventListener('change', function () {
            actualizarTitulo();
        });
    });
</script>
@endsection
