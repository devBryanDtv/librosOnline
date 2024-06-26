<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'producto_id',
        'titulo',
        'descripcion',
        'descuento',
        'precio_oferta',
        'fecha_inicio',
        'fecha_fin',
        'codigo_promocional',
        'restricciones',
        'url_oferta',
        'imagen_url',
        'activo',
        'vendedor',
        'tipo_oferta',
        'cantidad_limite',
        'rating_promedio',
        'numero_ratings',
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'activo' => 'boolean',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function softDelete()
    {
        $this->activo = false;
        $this->save();
    }
}
