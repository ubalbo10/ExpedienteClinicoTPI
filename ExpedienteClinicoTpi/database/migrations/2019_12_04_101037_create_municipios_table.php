<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->string("id")->primary();
            $table->string('nDepartamento');
        });

        Schema::create('municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dep_id');
            $table->foreign('dep_id')->references('id')->on('departamentos');
            $table->string('nMunicipio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('departamentos');
    }
}
