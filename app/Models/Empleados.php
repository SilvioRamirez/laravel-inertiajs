<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $table = "empleados";
    protected $fillable = [
        'cedula_documento',
        'documento_fiscal',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'sexo',
        'nacionalidad',
        'fec_nacimiento',
        'lugar_nacimiento',
        'estado_civil',
        'fec_estado_civil',
        'email',
        'foto',
        'tipo_persona',
        'num_estatus',
        'gruposangre',
        'tipopersona',
        'ciudad',
        'sector',
        'fec_ultima_modificacion',
        'seguridad_usuario',
    ];
}
