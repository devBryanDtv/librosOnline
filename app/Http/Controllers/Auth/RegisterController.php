<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'fecha_nacimiento' => ['nullable', 'date'],
            'genero' => ['nullable', 'string', 'max:1'],
            'telefono' => ['nullable', 'string', 'max:15'],
            'direccion' => ['nullable', 'string', 'max:255'],
            'ciudad' => ['nullable', 'string', 'max:100'],
            'estado' => ['nullable', 'string', 'max:100'],
            'codigo_postal' => ['nullable', 'string', 'max:10'],
            'pais' => ['nullable', 'string', 'max:100'],
            'ultimo_login' => ['nullable', 'date'],
            'estado_cuenta' => ['nullable', 'string', 'max:50'],
            'tipo_usuario' => ['nullable', 'string', 'max:50'],
            'numero_tarjeta' => ['nullable', 'string', 'max:16'],
            'fecha_expiracion_tarjeta' => ['nullable', 'date'],
            'codigo_seguridad_tarjeta' => ['nullable', 'string', 'max:4'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'fecha_nacimiento' => $data['fecha_nacimiento'] ?? null,
            'genero' => $data['genero'] ?? null,
            'telefono' => $data['telefono'] ?? null,
            'direccion' => $data['direccion'] ?? null,
            'ciudad' => $data['ciudad'] ?? null,
            'estado' => $data['estado'] ?? null,
            'codigo_postal' => $data['codigo_postal'] ?? null,
            'pais' => $data['pais'] ?? null,
            'ultimo_login' => $data['ultimo_login'] ?? null,
            'estado_cuenta' => $data['estado_cuenta'] ?? null,
            'tipo_usuario' => $data['tipo_usuario'] ?? null,
            'numero_tarjeta' => $data['numero_tarjeta'] ?? null,
            'fecha_expiracion_tarjeta' => $data['fecha_expiracion_tarjeta'] ?? null,
            'codigo_seguridad_tarjeta' => $data['codigo_seguridad_tarjeta'] ?? null,
        ]);
    }
}
