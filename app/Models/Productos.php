<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'precio',
        'categoria',
        'marca',
        'modelo',
        'sku',
        'upc',
        'stock',
        'url_producto',
        'imagen_url',
        'fecha_agregado',
        'fecha_ultima_actualizacion',
        'calificacion_promedio',
        'numero_resenas',
        'peso',
        'dimensiones',
        'color',
        'material',
        'fabricante',
    ];

    protected $casts = [
        'fecha_agregado' => 'date',
        'fecha_ultima_actualizacion' => 'datetime',
    ];
}
