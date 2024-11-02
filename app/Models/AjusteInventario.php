<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AjusteInventario extends Model
{
    use HasFactory;

    protected $table = 'ajustes_inventario';

    protected $fillable = [
        'fk_inventario',
        'cantidad_ajustada',
        'motivo',
        'fk_empleado',
        'created_at'
    ];
}
