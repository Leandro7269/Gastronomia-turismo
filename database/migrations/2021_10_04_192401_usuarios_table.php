<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_local',50);
            $table->string('tipo_de_negocio',50);
            $table->string('categoria',50);
            $table->string('sucursales',50)->nullable();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('telefono',50)->nullable();
            $table->string('email',50);
            $table->string('password',50);
            $table->string('direccion_local',50);
            $table->string('ref',50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
