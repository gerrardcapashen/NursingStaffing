<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyudastecnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudastecnicas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->enum('flg_SillaRuedasManual', ['Sí','No']);
            $table->enum('flg_SillaRuedasMotorizada', ['Sí','No']);
            $table->enum('flg_SillaBaño', ['Sí','No']);
            $table->enum('flg_Cojin', ['Sí','No']);
            $table->enum('flg_EstadoSillas', ['Bueno','Regular','Malo']);
            $table->enum('flg_CatreClinico', ['Sí','No']);
            $table->enum('flg_ColchonAntiescaras', ['Sí','No']);
            $table->enum('flg_Tecle', ['Sí','No']);
            $table->enum('flg_EstadoCatreTecleCae', ['Bueno','Regular','Malo']);
            $table->enum('flg_Andador', ['Sí','No']);
            $table->enum('flg_Bastones', ['Sí','No']);
            $table->enum('flg_EstadoAndadorBastones', ['Bueno','Regular','Malo']);
            $table->enum('flg_MotorAspiracion', ['Sí','No']);
            $table->enum('flg_BalonOxigeno', ['Sí','No']);
            $table->enum('flg_Lentes', ['Sí','No']);
            $table->enum('flg_Audifonos', ['Sí','No']);
            $table->string('Otro');
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
        Schema::dropIfExists('ayudastecnicas');
    }
}
