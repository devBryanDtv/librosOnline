<?php
namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class OfertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ofertas = Oferta::where('activo', true)->get();
        return view('ofertas.index', compact('ofertas'));
    }



    public function create()
    {
        $productos = Producto::all(); // Obtener todos los productos disponibles
        return view('ofertas.create', compact('productos'));
    }



    public function store(Request $request)
    {
    // Validar los campos requeridos
    $this->validate($request, [
        'producto_id' => 'required|exists:productos,id',
        'titulo' => 'required|string|max:100', // Cambiado a 'string'
        'descripcion' => 'nullable|string',
        'descuento' => 'required|numeric|min:0|max:100',
        'precio_oferta' => 'required|numeric|min:0',
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    // Obtener el nombre del producto seleccionado
    $producto = Producto::findOrFail($request->input('producto_id'));
    $titulo = $producto->nombre_producto;

    // Crear una nueva instancia de Oferta y asignar los valores recibidos
    $oferta = new Oferta();
    $oferta->producto_id = $request->input('producto_id');
    $oferta->titulo = $titulo; // Asignar el título obtenido del producto
    $oferta->descripcion = $request->input('descripcion');
    $oferta->descuento = $request->input('descuento');
    $oferta->precio_oferta = $request->input('precio_oferta');
    $oferta->fecha_inicio = $request->input('fecha_inicio');
    $oferta->fecha_fin = $request->input('fecha_fin');
    $oferta->activo = true; // Establecer activo como verdadero por defecto
    $oferta->save();

    // Redirigir a la lista de ofertas con un mensaje de éxito
    return redirect()->route('ofertas.index')->with('success', 'Oferta creada exitosamente');
    }
    
    

    public function edit(Oferta $oferta)
    {
        $productos = Producto::where('stock', '>', 0)->get();
        return view('ofertas.edit', compact('oferta', 'productos'));
    }



    public function update(Request $request, Oferta $oferta)
    {
        $data = $request->validate([
            'producto_id' => 'productos,id',
            'codigo_promocional' => 'nullable|string|max:50',
            'descuento' => 'required|numeric|min:0|max:100',
            'titulo' => 'string|max:255',
            'precio_oferta' => 'required|numeric|min:0',
        ]);

        $oferta->update($data);

        return redirect()->route('ofertas.index')->with('success', 'Oferta actualizada exitosamente');
    }




    public function destroy(Oferta $oferta)
    {
        $oferta->softDelete();

        return redirect()->route('ofertas.index')->with('success', 'Oferta eliminada exitosamente');
    }

    
    public function consultarPdf()
    {
        $ofertasActivas = Oferta::where('activo', true)->get();
        $ofertasInactivas = Oferta::where('activo', false)->get();
        $today = Carbon::now()->format('d/m/Y');

        $pdf = \PDF::loadView('ofertas.pdf', compact('ofertasActivas', 'ofertasInactivas', 'today'));
        return $pdf->download('ofertas.pdf');
    }
}
