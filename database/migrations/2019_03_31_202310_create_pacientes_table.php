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
            $table->string('nombre');
            $table->string('rut', 10)->unique();
            $table->date('fechaNacimiento');
            $table->enum('estadoCivil', ['Soltero/a','Casado/a','Conviviente Civil','Divorciado/a','Viudo/a']);
            $table->string('direccion');
            $table->string('comuna', 200);
            $table->integer('telefonoFijo')->nullable();
            $table->integer('celular')->nullable(); 
            $table->string('centroAtencionUrgencia');
            $table->string('medicoTratante');
            $table->date('inicioCuidados');
            $table->integer('activo');
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
