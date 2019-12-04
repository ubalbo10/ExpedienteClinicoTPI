<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->string('dui')->primary();
            $table->bigIncrements('usuario_id')->nullable()->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('set null');
            $table->bigIncrements('municipio_id')->nullable();
            $table->foreign('munucipio_id')->references('id')->on('municipios')->onDelete('set null');
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->date('fechaNac');
            $table->string('telefono', 9)->nullable()->default('0000-0000');
            $table->string('direccion', 100)->nullable()->default('N/A');
            $table->char('genero', 1)->nullable();
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('personas');
    }
}
