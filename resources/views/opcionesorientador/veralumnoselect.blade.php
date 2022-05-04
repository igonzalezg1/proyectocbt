@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-success" align="center">Informacion del alumno</h2>
			<br />
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-sm-12">
			<h3 align="center"> Informacion del alumno</h3>
			<br />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<img src="{!! asset('storage') !!}{!! '/'.$fotoal->ruta !!}" width="250px" id="foto">
			<br />
            <?php
                if ($alumno->status == 1) {
                    echo('<h6 class="text-success" id="status">Estado del alumno: Activo</h6>');
                }
                else if ($alumno->status == 0)
                {
                    echo('<h6 class="text-success" id="status">Estado del alumno: Baja</h6>');
                }else if($alumno->status == 2)
                {
                    echo('<h6 class="text-success" id="status">Estado del alumno: Egresado</h6>');
                }
            ?>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="ap_paterno">Apellido paterno: {!! $alumno->ap_paterno !!}</h6>
			<h6 class="text-success" id="ap_meterno">Apellido materno: {!! $alumno->ap_meterno !!}</h6>
			<h6 class="text-success" id="nombres">Nombre(s): {!! $alumno->nombres !!}</h6>
			<h6 class="text-success" id="id_carrera">Carrera: {!! $alumno->carreras->nombre !!}</h6>
			<h6 class="text-success" id="id_grupo">Grupo: {!! $alumno->grupos->nombre !!}</h6>
			<h6 class="text-success" id="curp">CURP: {!! $alumno->curp !!}</h6>
			<h6 class="text-success" id="fecha_nacimiento">Fecha de nacimiento(AAAA-MM-DD): {!! $alumno->fecha_nacimiento !!}</h6>
			<h6 class="text-success" id="semestre">Semestre actual: {!! $alumno->semestre !!}</h6>
			<h6 class="text-success" id="matricula">Matricula: {!! $alumno->matricula !!}</h6>
			<h6 class="text-success" id="telefono">Telefono personal: {!! $alumno->telefono !!}</h6>
			<h6 class="text-success" id="celular">Celular: {!! $alumno->celular !!}</h6>
			<h6 class="text-success" id="id_entidad">Entidad de residencia: {!! $alumno->entidades->nombre !!}</h6>
			<h6 class="text-success" id="id_municipio">Municipio de residencia: {!! $alumno->municipios->nombre !!}</h6>
			<h6 class="text-success" id="calles">Entre las calles: {!! $alumno->calle_1 !!} y {!! $alumno->calle_2 !!}</h6>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="correo">Correo electronico: {!! $alumno->correo !!}</h6>
			<h6 class="text-success" id="facebook">Facebook personal: {!! $alumno->facebook !!}</h6>
			<h6 class="text-success" id="twitter">Twitter personal: {!! $alumno->twitter !!}</h6>
			<h6 class="text-success" id="edocivil">Estado Civil: {!! $alumno->edocivil !!}</h6>
			<h6 class="text-success" id="nacionalidad">Nacionalidad: {!! $alumno->nacionalidades->nombre !!}</h6>
			<h6 class="text-success" id="idiomas">Idiamas extras que habla: {!! $alumno->idiomas !!}</h6>
			<h6 class="text-success" id="tipo_sangre">Tipo de sangre: {!! $alumno->tipo_sangre !!}</h6>
			<h6 class="text-success" id="no_seguro">Numero de seguro social: {!! $alumno->no_seguro !!}</h6>
            <?php
                if ($alumno->status_pago == 1)
                {
                    echo('<h6 class="text-success" id="status">Estado del pago: Realizado</h6>');
                }else
                {
                    echo('<h6 class="text-success" id="status">Estado del pago: No realizado</h6>');
                }
            ?>
			<h6 class="text-success" id="direccion">Direccion: {!! $alumno->direccion !!}</h6>
			<h6 class="text-success" id="id_pais">Pais de residencia: {!! $alumno->paises->nombre !!}</h6>
			<h6 class="text-success" id="id_colonia">Colonia de residencia: {!! $alumno->colonias->nombre !!}</h6>
			<h6 class="text-success" id="observacion_direccion">Referencia de domicilio: {!! $alumno->observacion_direccion !!}</h6>
			<h6 class="text-success" id="id_generacion">Generacion: {!! $alumno->generaciones->nombre !!}</h6>
		</div>
	</div>
	<hr />
	<hr />
	<div class="row">
		<div class="col-sm-12">
			<h3 align="center">Informacion del padre o tutor</h3>
			<br />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<h6 class="text-success" id="ap_paterno_tutor">Apellido paterno del tutor: {!! $alumno->ap_paterno_tutor !!}</h6>
			<h6 class="text-success" id="ap_meterno_tutor">Apellido materno del tutor: {!! $alumno->ap_meterno_tutor !!}</h6>
			<h6 class="text-success" id="nombres_tutor">Nombre(s) del tutor: {!! $alumno->nombres_tutor !!}</h6>
			<h6 class="text-success" id="parentezco_tutor">Parentezco: {!! $alumno->parentezco_tutor !!}</h6>
			<h6 class="text-success" id="fecha_nacimiento_tutor">Fecha de nacimiento del tutor: {!! $alumno->fecha_nacimiento_tutor !!}</h6>
			<h6 class="text-success" id="edad_tutor">Edad del tutor: {!! $alumno->edad_tutor !!}</h6>
			<h6 class="text-success" id="ine_tutor">INE del tutor: {!! $alumno->ine_tutor !!}</h6>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="curp_tutor">CURP del tutor: {!! $alumno->curp_tutor !!}</h6>
			<h6 class="text-success" id="genero_tutor">Genero del tutor: {!! $alumno->genero_tutor !!}</h6>
			<h6 class="text-success" id="edocivil_tutor">Estado civil del tutor: {!! $alumno->edocivil_tutor !!}</h6>
			<h6 class="text-success" id="ocupacion_tutor">Ocupacion del tutor: {!! $alumno->ocupacion_tutor !!}</h6>
			<h6 class="text-success" id="estudios_tutor">Estudios del tutor: {!! $alumno->estudios_tutor !!}</h6>
			<h6 class="text-success" id="correo_tutor">Correo del tutor: {!! $alumno->correo_tutor !!}</h6>
			<h6 class="text-success" id="direccion_tutor">Direccion del tutor: {!! $alumno->direccion_tutor !!}</h6>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="telefono_tutor">Telefono del tutor: {!! $alumno->telefono_tutor !!}</h6>
			<h6 class="text-success" id="celular_tutor">Celular del tutor: {!! $alumno->celular_tutor !!}</h6>
			<h6 class="text-success" id="id_pais_tutor">Pais de residencia: {!! $alumno->paises->nombre !!}</h6>
			<h6 class="text-success" id="id_entidad_tutor">Entidad de residencia: {!! $alumno->entidades->nombre !!}</h6>
			<h6 class="text-success" id="id_municipio_tutor">Municipio de residencia: {!! $alumno->municipios->nombre !!}</h6>
			<h6 class="text-success" id="id_colonia_tutor">Colonia de residencia: {!! $alumno->colonias->nombre !!}</h6>
			<h6 class="text-success" id="observacion_direccion_tutor">Referencia de domicilio: {!! $alumno->observacion_direccion_tutor !!}</h6>
			<h6 class="text-success" id="calles_tutor">Entre calles: {!! $alumno->calle_1_tutor !!} y {!! $alumno->calle_2_tutor !!}</h6>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<a href="{!! asset('indexo') !!}" class="btn btn-primary w-100">Regresar a opciones de orientador</a>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<br />
<br />
@endsection()