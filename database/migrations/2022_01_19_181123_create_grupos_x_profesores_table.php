<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposXProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_x_profesores', function (Blueprint $table) {
            $table->id();
		    $table->unsignedBigInteger('id_grupo');
		    $table->unsignedBigInteger('id_profesor');
		    $table->integer('status');
		    $table->timestamps();
		    $table->foreign('id_grupo')->references('id')->on('grupos');
		    $table->foreign('id_profesor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_x_profesores');
    }
}
