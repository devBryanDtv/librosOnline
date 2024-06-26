@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-50">
    <div class="card shadow-lg w-75">
        <div class="card-header bg-primary text-white text-center">
            <h1>Mapa de Sitio</h1>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ url('/') }}" class="text-decoration-none text-primary">
                        <i class="bi bi-house-door-fill me-2"></i>Inicio
                    </a>
                </li>
                <li class="list-group-item">
                    Productos
                    <ul class="list-group mt-2">
                        <li class="list-group-item">
                            <a href="{{ url('/productos/create') }}" class="text-decoration-none text-primary">
                                <i class="bi bi-plus-circle-fill me-2"></i>Crear Producto
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ url('/home') }}" class="text-decoration-none text-primary">
                                <i class="bi bi-list-ul me-2"></i>Listar Productos
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item">
                    Ofertas
                    <ul class="list-group mt-2">
                        <li class="list-group-item">
                            <a href="{{ url('/ofertas') }}" class="text-decoration-none text-primary">
                                <i class="bi bi-tags-fill me-2"></i>Mostrar Ofertas
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ url('/ofertas/create') }}" class="text-decoration-none text-primary">
                                <i class="bi bi-plus-circle-fill me-2"></i>Crear Oferta
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item">
                    Favoritos
                    <ul class="list-group mt-2">
                        <li class="list-group-item">
                            <a href="{{ url('/favoritos') }}" class="text-decoration-none text-primary">
                                <i class="bi bi-heart-fill me-2"></i>Mostrar Favoritos
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item">
                    Perfil
                    <ul class="list-group mt-2">
                        <li class="list-group-item">
                            <a href="{{ url('/perfil') }}" class="text-decoration-none text-primary">
                                <i class="bi bi-person-fill me-2"></i>Mostrar Perfil
                            </a>
                        </li>
                       <!-- <li class="list-group-item">
                            <a href="{{ url('/perfil/edit') }}" class="text-decoration-none text-primary">
                                <i class="bi bi-pencil-fill me-2"></i>Editar Perfil
                            </a>
                        </li>-->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
