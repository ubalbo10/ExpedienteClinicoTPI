<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleOrdenReferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden_referencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('cita_id');
            $table->bigIncrements('ordenref_id');
            $table->foreign('cita_id')->references('id')->on('citas')->onDelete('cascade');
            $table->foreign('ordenref_id')->references('id')->on('orden_referencias')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_orden_referencias');
    }
}
