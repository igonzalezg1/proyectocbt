<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonias', function (Blueprint $table) {
            $table->id();
			$table->string('nombre',180);
			$table->string('ciudad',180);
			$table->string('tipo_asentamiento',180);
			$table->string('cp',6);
			$table->unsignedBigInteger('id_municipio');
			$table->timestamps();
			$table->foreign('id_municipio')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colonias');
    }
}
