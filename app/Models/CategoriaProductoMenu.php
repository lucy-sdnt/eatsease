<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProductoMenu extends Model
{
    use HasFactory;

    protected $table = 'categorias_productos_menu';

    protected $fillable = [
        'nombre',
        'descripcion',
        'created_at',
        'updated_at'
    ];
}
