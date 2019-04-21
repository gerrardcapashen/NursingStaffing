<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_salud', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->string('diagnostico_Laboral');
            $table->string('diagnostico_NoLaboral');
            $table->string('prestadorSalud');
            $table->integer('cuidadoras_horas');
            $table->integer('cuidadoras_numero');
            $table->string('controles_medicos');
            $table->enum('flg_Rehabilitacion', ['Sí','No']);
            $table->enum('flg_RehabDomiciliaria', ['Sí','No']);
            $table->enum('flg_RehabAmbulatoria', ['Sí','No']);
            $table->enum('flg_Mantencion', ['Sí','No']);
            $table->enum('flg_MantDomiciliaria', ['Sí','No']);
            $table->enum('flg_MantAmbulatoria', ['Sí','No']);
            $table->enum('flg_CargaKineMotora', ['Sí','No']);
            $table->char('flg_CargaKineResp');
            $table->char('flg_CargaFono');
            $table->char('flg_CargaTerapiaO');
            $table->char('flg_CargaPsicologia');
            $table->date('proximoControlSalud');
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
        Schema::dropIfExists('antecedentes_salud');
    }
}
