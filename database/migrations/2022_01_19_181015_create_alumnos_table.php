<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
			$table->string('ap_paterno',180);
			$table->string('ap_meterno',180);
			$table->string('nombres',180);
			$table->string('curp',180);
			$table->string('genero',10);
			$table->date('fecha_nacimiento');
			$table->integer('edad');
			$table->unsignedBigInteger('id_grupo');
			$table->integer('semestre');
			$table->unsignedBigInteger('id_carrera');
			$table->string('matricula',180);
			$table->string('telefono',180);
			$table->string('celular',180);
			$table->string('correo',180);
			$table->string('facebook',180);
			$table->string('twitter',180);
			$table->string('edocivil',180);
			$table->unsignedBigInteger('id_nacionalidad');
			$table->string('idiomas',180);
			$table->string('tipo_sangre',180);
			$table->string('no_seguro',180);
			$table->integer('status_pago');
			$table->string('direccion',180);
			$table->unsignedBigInteger('id_pais');
			$table->unsignedBigInteger('id_entidad');
			$table->unsignedBigInteger('id_municipio');
			$table->unsignedBigInteger('id_colonia');
			$table->string('observacion_direccion',180);
			$table->string('calle_1',180);
			$table->string('calle_2',180);
			$table->unsignedBigInteger('id_generacion');
			$table->string('ap_paterno_tutor',180);
			$table->string('ap_meterno_tutor',180);
			$table->string('nombres_tutor',180);
			$table->string('parentezco_tutor',180);
			$table->date('fecha_nacimiento_tutor');
			$table->integer('edad_tutor');
			$table->string('ine_tutor',180);
			$table->string('curp_tutor',180);
			$table->string('genero_tutor',10);
			$table->string('edocivil_tutor',180);
			$table->string('ocupacion_tutor',180);
			$table->string('estudios_tutor',180);
			$table->string('telefono_tutor',180);
			$table->string('celular_tutor',180);
			$table->string('correo_tutor',180);
			$table->string('direccion_tutor',180);
			$table->unsignedBigInteger('id_pais_tutor');
			$table->unsignedBigInteger('id_entidad_tutor');
			$table->unsignedBigInteger('id_municipio_tutor');
			$table->unsignedBigInteger('id_colonia_tutor');
			$table->string('observacion_direccion_tutor',180);
			$table->string('calle_1_tutor',180);
			$table->string('calle_2_tutor',180);
			$table->integer('status');
			$table->timestamps();
			$table->foreign('id_grupo')->references('id')->on('grupos');
			$table->foreign('id_carrera')->references('id')->on('carreras');
			$table->foreign('id_nacionalidad')->references('id')->on('nacionalidades');
			$table->foreign('id_pais')->references('id')->on('paises');
			$table->foreign('id_entidad')->references('id')->on('entidades');
			$table->foreign('id_municipio')->references('id')->on('municipios');
			$table->foreign('id_colonia')->references('id')->on('colonias');
			$table->foreign('id_generacion')->references('id')->on('generaciones');
			$table->foreign('id_pais_tutor')->references('id')->on('paises');
			$table->foreign('id_entidad_tutor')->references('id')->on('entidades');
			$table->foreign('id_municipio_tutor')->references('id')->on('municipios');
			$table->foreign('id_colonia_tutor')->references('id')->on('colonias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
