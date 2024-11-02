<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaInventario extends Model
{
    use HasFactory;

    protected $table = 'categorias_inventario';

    protected $fillable = [
        'nombre',
        'descripcion',
        'created_at',
        'updated_at'
    ];
}
