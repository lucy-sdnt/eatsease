<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'fk_persona',
        'puesto',
        'salario',
        'fecha_contratacion',
        'created_at',
        'updated_at'
    ];
}
