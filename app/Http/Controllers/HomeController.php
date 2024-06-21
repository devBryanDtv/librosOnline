<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $productos = Producto::where('stock', '>', 0)
            ->orderBy('calificacion_promedio', 'desc')
            ->take(15)
            ->get();

        // Retornar la vista con los datos de los productos
        return view('home', compact('productos'));
    }
}
