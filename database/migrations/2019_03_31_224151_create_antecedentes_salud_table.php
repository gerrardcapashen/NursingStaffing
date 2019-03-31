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
            $table->char('flg_Rehabilitacion');
            $table->char('flg_RehabDomiciliaria');
            $table->char('flg_RehabAmbulatoria');
            $table->char('flg_Mantencion');
            $table->char('flg_MantDomiciliaria');
            $table->char('flg_MantAmbulatoria');
            $table->char('flg_CargaKineMotora');
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
