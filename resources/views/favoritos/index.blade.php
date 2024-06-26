@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Mis Favoritos</h1>

    <div class="row justify-content-center">
        @forelse($favoritos as $favorito)
            <div class="col-md-4 mb-4">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset($favorito->producto->imagen_url) }}" class="card-img-top" alt="{{ $favorito->producto->nombre_producto }}" style="object-fit: cover; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $favorito->producto->nombre_producto }}</h5>
                        <p class="card-text">{{ $favorito->producto->descripcion }}</p>
                        <div class="mt-auto">
                            <p class="card-text">Precio: {{ $favorito->producto->precio }} MXN</p>
                            <form id="delete-favorito-{{ $favorito->id }}" action="{{ route('favoritos.destroy', $favorito->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger mt-2 delete-favorito-button" data-favorito-id="{{ $favorito->id }}">Eliminar de Favoritos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No tienes productos en favoritos.</p>
        @endforelse
    </div>
</div>

<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-favorito-button');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const favoritoId = this.getAttribute('data-favorito-id');
                const formId = `#delete-favorito-${favoritoId}`;

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'No podrás revertir esto',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Realizar la solicitud de eliminación
                        fetch(`/favoritos/${favoritoId}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.message === 'Producto eliminado de favoritos') {
                                Swal.fire(
                                    'Eliminado',
                                    data.message,
                                    'success'
                                ).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Error',
                                    data.message,
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire(
                                'Error',
                                'Ocurrió un error al procesar la solicitud',
                                'error'
                            );
                        });
                    }
                });
            });
        });
    });
</script>
@endsection
