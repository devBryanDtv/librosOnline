@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Perfil de Usuario</h1>

    <form action="{{ route('perfil.update', Auth::user()->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ Auth::user()->fecha_nacimiento }}">
        </div>

        <div class="form-group mb-3">
            <label for="genero">Género</label>
            <select name="genero" id="genero" class="form-control">
                <option value="M" @if(Auth::user()->genero == 'M') selected @endif>Masculino</option>
                <option value="F" @if(Auth::user()->genero == 'F') selected @endif>Femenino</option>
                <option value="O" @if(Auth::user()->genero == 'O') selected @endif>Otro</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" id="telefono" class="form-control" value="{{ Auth::user()->telefono }}">
        </div>

        <div class="form-group mb-3">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ Auth::user()->direccion }}">
        </div>

        <div class="form-group mb-3">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{ Auth::user()->ciudad }}">
        </div>

        <div class="form-group mb-3">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{ Auth::user()->estado }}">
        </div>

        <div class="form-group mb-3">
            <label for="codigo_postal">Código Postal</label>
            <input type="text" name="codigo_postal" id="codigo_postal" class="form-control" value="{{ Auth::user()->codigo_postal }}">
        </div>

        <div class="form-group mb-3">
            <label for="pais">País</label>
            <input type="text" name="pais" id="pais" class="form-control" value="{{ Auth::user()->pais }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
