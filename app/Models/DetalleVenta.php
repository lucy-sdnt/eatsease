<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $table = 'detalles_venta';

    protected $fillable = [
        'fk_venta',
        'fk_producto_menu',
        'cantidad',
        'precio',
        'created_at',
        'updated_at'
    ];
}
