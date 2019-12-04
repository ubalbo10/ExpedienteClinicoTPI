<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleOrdenExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden_examens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('examen_id');
            $table->bigIncrements('orden_examen_id');
            $table->foreign('examen_id')->references('id')->on('examenes');
            $table->foreign('orden_examen_id')->references('id')->on('orden_examenes')->onDelete('cascade');
            $table->boolean('realizado')->nullable()->default(false);
            $table->string('resultado', 255)->nullable()->default('Resultado');
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
        Schema::dropIfExists('detalle_orden_examens');
    }
}
