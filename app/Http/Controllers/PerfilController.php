<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display the specified resource.
     */
    public function index()
    {
        return view('perfil.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los campos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'genero' => 'nullable|string|in:M,F,O',
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string|max:255',
            'ciudad' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:255',
            'codigo_postal' => 'nullable|string|max:10',
            'pais' => 'nullable|string|max:255',
        ]);

        // Actualizar los datos del usuario
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->genero = $request->genero;
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;
        $user->ciudad = $request->ciudad;
        $user->estado = $request->estado;
        $user->codigo_postal = $request->codigo_postal;
        $user->pais = $request->pais;
        $user->save();

        return redirect()->back()->with('success', 'Perfil actualizado correctamente');
    }
}
