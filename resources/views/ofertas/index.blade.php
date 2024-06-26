@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ofertas</h1>
    <a href="{{ route('ofertas.create') }}" class="btn btn-primary mb-3">Crear Nueva Oferta</a>
    <div style="margin-bottom:20px;">   
        
        <a href="{{ route('ofertas.consultarPdf') }}" class="btn btn-primary">Consultar PDF</a>

    </div>
    <table id="ofertas-table" class="display table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Descuento</th>
                <th>Precio Oferta</th>
                <th>Codigo Promocional</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ofertas as $oferta)
                <tr>
                    <td>{{ $oferta->id }}</td>
                    <td>{{ $oferta->titulo }}</td>
                    <td>{{ $oferta->descripcion }}</td>
                    <td>{{ $oferta->descuento }}%</td>
                    <td>{{ $oferta->precio_oferta }} MXN</td>
                    <td>{{ $oferta->codigo_promocional }}</td>
                    <td>{{ $oferta->fecha_inicio->format('Y-m-d') }}</td>
                    <td>{{ $oferta->fecha_fin->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('ofertas.edit', $oferta->id) }}" class="btn btn-warning btn-action">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                        <form action="{{ route('ofertas.destroy', $oferta->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action">
                                <i class="bi bi-trash"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#ofertas-table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    text: '<i class="bi bi-files"></i> Copiar',
                    className: 'btn btn-secondary'
                },
                {
                    extend: 'csv',
                    text: '<i class="bi bi-file-earmark-spreadsheet"></i> CSV',
                    className: 'btn btn-secondary'
                },
                {
                    extend: 'excel',
                    text: '<i class="bi bi-file-earmark-excel"></i> Excel',
                    className: 'btn btn-success',
                    filename: function () {
                        return 'Ofertas_' + new Date().toISOString().replace(/[-:]/g, '_');
                    }
                },
                {
                    extend: 'pdf',
                    text: '<i class="bi bi-file-earmark-pdf"></i> PDF',
                    className: 'btn btn-danger',
                    customize: function (doc) {
                        doc.defaultStyle.fontSize = 10;
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="bi bi-printer"></i> Imprimir',
                    className: 'btn btn-info'
                }
            ]
        });
    });
</script>
@endpush

@push('styles')
<style>
    .btn-action {
        width: 100px; /* Ajusta este valor según sea necesario */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-action i {
        margin-right: 5px; /* Espacio entre el icono y el texto */
        margin-bottom:5px;
    }
    
</style>
@endpush
