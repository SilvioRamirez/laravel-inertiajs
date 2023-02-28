<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empleados')->insert([
            'cedula_documento' => 'V20428781',
            'documento_fiscal' => 'V20428781-0',
            'nombre1' => 'Silvio',
            'nombre2' => 'Arturo',
            'apellido1' => 'Ramirez',
            'apellido2' => 'Molina',
            'sexo' => 'MASCULINO',
            'nacionalidad' => 'Venezolano',
            'fec_nacimiento' => '1992-03-17',
            'lugar_nacimiento' => 'Valera',
            'estado_civil' => 'Soltero',
            'fec_estado_civil' => '1992-03-17',
            'email' => 'silvio.ramirez.m@gmail.com',
            'foto' => '',
            'tipo_persona' => 'Real',
            'num_estatus' => '1',
            'gruposangre' => 'A-',
            'tipopersona' => '',
            'ciudad' => 'Escuque',
            'sector' => 'Urb. Fray Ingacio Alvarez',
            'fec_ultima_modificacion' => Carbon::now(),
            'seguridad_usuario' => '1',
        ]);
    }
}
