<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Rut', 10)->unique();
            $table->date('FechaNacimiento');
            $table->string('Direccion');
            $table->string('Comuna', 200);
            $table->integer('TelefonoFijo')->nullable();
            $table->integer('celular')->nullable();
            $table->enum('EstadoCivil', ['Soltero/a','Casado/a','Conviviente Civil','Divorciado/a','Viudo/a']);
            $table->string('CentroAtencionUrgencia');
            $table->string('MedicoTratante');
            $table->date('InicioCuidados');
            $table->integer('Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
