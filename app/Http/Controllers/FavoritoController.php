<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class FavoritoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $favoritos = $user->favoritos()->with('producto')->get();

        return view('favoritos.index', compact('favoritos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $productoId = $request->input('producto_id');

        // Verificar si ya existe este producto en favoritos del usuario
        $existingFavorite = Favorito::where('usuario_id', $user->id)
                                    ->where('producto_id', $productoId)
                                    ->first();

        if ($existingFavorite) {
            return response()->json(['message' => 'El producto ya está en favoritos'], 422);
        }

        // Crear un nuevo favorito
        $favorito = new Favorito();
        $favorito->usuario_id = $user->id;
        $favorito->producto_id = $productoId;
        $favorito->fecha_agregado = now(); // Fecha actual
        $favorito->save();

        return response()->json(['message' => 'Producto agregado a favoritos'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Auth::user();
        
        // Buscar el favorito por su ID único y usuario para eliminarlo
        $favorito = Favorito::where('usuario_id', $user->id)
                            ->where('producto_id', $id)
                            ->first();
        
        if ($favorito) {
            $favorito->delete();
            return response()->json(['message' => 'Producto eliminado de favoritos'], 200);
        }
        
        return response()->json(['message' => 'No se encontró el favorito'], 404);
    }
public function addToFavorites($productId)
{
    try {
        $user = auth()->user();
        $product = Producto::findOrFail($productId);

        // Verificar si el producto ya está en favoritos
        if ($user->favoritos()->where('producto_id', $productId)->exists()) {
            return response()->json(['message' => 'El producto ya está marcado como favorito'], 200);
        }

        // Si no está en favoritos, agregar
        $user->favoritos()->attach($productId);
        return response()->json(['message' => 'Producto añadido a favoritos'], 200);

    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al procesar la solicitud'], 422);
    }
}
public function generarFavoritosPDF()
{
    // Obtener todos los favoritos
    $favoritos = Favorito::with('producto')->get();

    // Cargar la vista del PDF y pasar los datos
    $pdf = \PDF::loadView('favoritos.pdf', compact('favoritos'));

    // Descargar el PDF con un nombre específico
    return $pdf->download('Favoritos.pdf');
}
}
