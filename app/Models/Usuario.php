<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre_local', 
        'tipo_de_negocio', 
        'categoria', 
        'sucursales',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'password',
        'direccion_local',
        'ref',
    ];
}
