<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'producto_id',
        'fecha_agregado',
        'comentario',
        'rating',
        'notificaciones',
        'categoria',
        'marca',
        'precio',
        'descuento',
        'fecha_inicio_descuento',
        'fecha_fin_descuento',
        'url_producto',
        'imagen_url',
        'disponibilidad',
        'fecha_ultima_actualizacion',
        'en_lista_deseos',
        'cantidad',
        'prioridad',
    ];

    protected $casts = [
        'fecha_agregado' => 'date',
        'fecha_inicio_descuento' => 'date',
        'fecha_fin_descuento' => 'date',
        'disponibilidad' => 'boolean',
        'notificaciones' => 'boolean',
        'en_lista_deseos' => 'boolean',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
