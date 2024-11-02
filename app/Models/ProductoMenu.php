<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoMenu extends Model
{
    use HasFactory;

    protected $table = 'productos_menu';

    protected $fillable = [
        'fk_categoria_producto_menu',
        'nombre',
        'descripcion',
        'precio',
        'created_at',
        'updated_at'
    ];
}
