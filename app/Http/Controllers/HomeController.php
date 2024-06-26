<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Producto; // Asegúrate de que el nombre coincida exactamente con el modelo

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        $productos = Producto::where('stock', '>', 0)
            ->orderBy('calificacion_promedio', 'desc')
            ->take(15)
            ->get();
    
        // Marcar los productos como favoritos para el usuario actual
        foreach ($productos as $producto) {
            $producto->favorito = $user->favoritos()->where('producto_id', $producto->id)->exists();
        }
    
        return view('home', compact('productos'));
    }
}