<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignosVitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signos_vitales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('temperatura', 4, 2)->nullable()->default(37.00);
            $table->double('peso', 5, 2)->nullable()->default(000.00);
            $table->integer('ritmo_cardiaco')->unsigned()->nullable()->default(70);
            $table->string('presion_arterial', 7)->nullable();
            $table->bigIncrements('consulta_id');
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
        Schema::dropIfExists('signos_vitales');
    }
}
