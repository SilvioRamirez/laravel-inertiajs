<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_documento', 15)->unique();
            $table->string('documento_fiscal', 20)->unique();
            $table->string('nombre1', 150);
            $table->string('nombre2', 75)->nullable();
            $table->string('apellido1', 75);
            $table->string('apellido2', 75)->nullable();
            $table->string('sexo', 11);
            $table->string('nacionalidad', 11);
            $table->date('fec_nacimiento');
            $table->string('lugar_nacimiento', 150);
            $table->string('estado_civil', 15);
            $table->date('fec_estado_civil');
            $table->string('email')->unique()->nullable();
            $table->string('foto');
            $table->string('tipo_persona');
            $table->string('num_estatus');
            $table->string('gruposangre');
            $table->string('tipopersona');
            $table->string('ciudad');
            $table->string('sector');
            $table->date('fec_ultima_modificacion');
            $table->string('seguridad_usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
