<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenReferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_referencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('especialidad_id')->unsigned();
            $table->foreign('especialidad_id')->references('id')->on('especialidads');
            $table->bigInteger('consulta_id')->unsigned();
            $table->foreign('consulta_id')->references('id')->on('consultas')->onDelete('cascade');
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
        Schema::dropIfExists('orden_referencias');
    }
}
