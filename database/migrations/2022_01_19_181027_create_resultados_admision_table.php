<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosAdmisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados_admision', function (Blueprint $table) {
            $table->id();
			$table->integer('anio_examen');
			$table->string('folio_examen',180);
			$table->integer('puntaje_total');
			$table->integer('puntaje_matematico');
			$table->integer('puntaje_analitico');
			$table->integer('puntaje_espaniol');
			$table->integer('puntaje_biologia');
			$table->integer('puntaje_fisica');
			$table->integer('puntaje_historia');
			$table->integer('puntaje_ingles');
			$table->unsignedBigInteger('id_alumno');
			$table->integer('status');
			$table->timestamps();
			$table->foreign('id_alumno')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados_admision');
    }
}
