<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriaClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motivo', 255)->nullable()->default('sin motivo');
            $table->string('historia', 510)->nullable()->default('text');
            $table->string('ant_familiares', 510)->nullable()->default('text');
            $table->string('ant_personales', 510)->nullable()->default('text');
            $table->string('resumen', 300)->nullable()->default('text');
            $table->bigInteger('expediente_id')->unsigned();
            $table->foreign('expediente_id')->references('id')->on('expedientes')->onDelete('cascade');
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
        Schema::dropIfExists('historia_clinicas');
    }
}
