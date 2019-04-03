<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroDiarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_diario', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->unsignedInteger('user1_id');
            $table->foreign('user1_id')->references('id')->on('users');
            $table->unsignedInteger('user2_id');
            $table->foreign('user2_id')->references('id')->on('users');
            $table->unsignedInteger('user3_id');
            $table->foreign('user3_id')->references('id')->on('users');
            $table->unsignedInteger('user4_id');
            $table->foreign('user4_id')->references('id')->on('users');
            $table->date('Fecha');
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
        Schema::dropIfExists('registro_diario');
    }
}
