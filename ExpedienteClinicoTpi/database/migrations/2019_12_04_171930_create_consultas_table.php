<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->bigInteger('empleado_id')->unsigned();
            $table->bigInteger('expediente_id')->unsigned();
            $table->bigInteger('predecesora_id')->unsigned();
            $table->bigInteger('sucesora_id')->unsigned();
            //Especialidad
            $table->string('resumen', 1024)->nullable()->default('Resumen');
            $table->date('fecha')->nullable();
            $table->time('horaInicio')->nullable();
            $table->time('horaFin')->nullable();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            $table->foreign('predecesora_id')->references('id')->on('consultas');
            $table->foreign('sucesora_id')->references('id')->on('consultas');
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
        Schema::dropIfExists('consultas');
    }
}
