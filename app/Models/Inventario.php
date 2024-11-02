<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventario';

    protected $fillable = [
        'fk_categoria_inventario',
        'nombre',
        'descripcion',
        'cantidad',
        'unidad_medida',
        'created_at',
        'updated_at'
    ];
}
