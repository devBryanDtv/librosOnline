@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Oferta') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ofertas.update', $oferta->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="producto_id" class="form-label">{{ __('Producto ID') }}</label>
                            <input id="producto_id" type="text" class="form-control @error('producto_id') is-invalid @enderror" name="producto_id" value="{{ old('producto_id', $oferta->producto_id) }}"  autocomplete="producto_id" autofocus disabled>
                            @error('producto_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="titulo" class="form-label">{{ __('Título') }}</label>
                            <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo', $oferta->titulo) }}"  autocomplete="titulo" disabled>
                            @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="codigo_promocional" class="form-label">{{ __('Código Promocional') }}</label>
                            <input id="codigo_promocional" type="text" class="form-control @error('codigo_promocional') is-invalid @enderror" name="codigo_promocional" value="{{ old('codigo_promocional', $oferta->codigo_promocional) }}">
                            @error('codigo_promocional')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descuento" class="form-label">{{ __('Descuento (%)') }}</label>
                            <input id="descuento" type="number" class="form-control @error('descuento') is-invalid @enderror" name="descuento" value="{{ old('descuento', $oferta->descuento) }}" required min="0" max="100">
                            @error('descuento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        

                        <div class="mb-3">
                            <label for="precio_oferta" class="form-label">{{ __('Precio de Oferta') }}</label>
                            <input id="precio_oferta" type="number" step="0.01" class="form-control @error('precio_oferta') is-invalid @enderror" name="precio_oferta" value="{{ old('precio_oferta', $oferta->precio_oferta) }}" required min="0">
                            @error('precio_oferta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Actualizar Oferta') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
