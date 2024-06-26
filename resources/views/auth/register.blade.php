<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            font-family: 'Nunito', sans-serif; /* Fuente principal */
        }

        .custom-container {
            margin-top: 50px; /* Margen superior */
        }

        .custom-card {
            border: none; /* Sin borde */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra ligera */
        }

        .custom-card-header {
            background-color: #007bff; /* Fondo azul */
            color: #ffffff; /* Texto blanco */
            font-size: 1.5rem; /* Tamaño de fuente */
            font-weight: bold; /* Texto en negrita */
            text-align: center; /* Alineación centrada */
            padding: 1.5rem; /* Espaciado interno */
        }

        .custom-form {
            padding: 2rem; /* Espaciado interno */
        }

        .custom-label {
            font-weight: bold; /* Texto en negrita */
        }

        .custom-btn {
            background-color: #007bff; /* Fondo azul */
            border-color: #007bff; /* Borde azul */
            font-weight: bold; /* Texto en negrita */
            transition: background-color 0.3s ease; /* Transición suave */
        }

        .custom-btn:hover {
            background-color: #0056b3; /* Color azul más oscuro al pasar el mouse */
        }

        .custom-btn-secondary {
            background-color: #6c757d; /* Fondo gris */
            border-color: #6c757d; /* Borde gris */
            font-weight: bold; /* Texto en negrita */
            transition: background-color 0.3s ease; /* Transición suave */
        }

        .custom-btn-secondary:hover {
            background-color: #5a6268; /* Color gris más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card custom-card">
                        <div class="card-header custom-card-header">{{ __('Register') }}</div>

                        <div class="card-body custom-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-3 row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end custom-label">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="email" class="col-md-4 col-form-label text-md-end custom-label">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="password" class="col-md-4 col-form-label text-md-end custom-label">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end custom-label">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                {{-- Additional fields --}}
                                <div class="mb-3 row">
                                    <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end custom-label">{{ __('Fecha de Nacimiento') }}</label>

                                    <div class="col-md-6">
                                        <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" autocomplete="fecha_nacimiento">

                                        @error('fecha_nacimiento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="genero" class="col-md-4 col-form-label text-md-end custom-label">{{ __('Género') }}</label>

                                    <div class="col-md-6">
                                        <select id="genero" class="form-control @error('genero') is-invalid @enderror" name="genero" autocomplete="genero">
                                            <option value="M" {{ old('genero') == 'M' ? 'selected' : '' }}>Masculino</option>
                                            <option value="F" {{ old('genero') == 'F' ? 'selected' : '' }}>Femenino</option>
                                            <option value="O" {{ old('genero') == 'O' ? 'selected' : '' }}>Otro</option>
                                        </select>

                                        @error('genero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Botón de regreso a Login --}}
                                <div class="mb-3 row">
                                    <div class="col-md-6 offset-md-4">
                                        <a href="{{ route('login') }}" class="btn btn-secondary custom-btn-secondary">
                                            {{ __('Back to Login') }}
                                        </a>
                                    </div>
                                </div>

                                <div class="mb-0 row">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary custom-btn">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
