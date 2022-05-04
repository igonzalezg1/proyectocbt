@extends('template.master')
@section('contenido_central')
<style>
	hr{
		height: 15px;
		background-color: green;
	}
</style>
<script>
	function llenar_entidades(id_pais)
	{
		$("#id_entidad").empty();
		var asset = '{!! asset('') !!}';
		var ruta = asset+'combo_entidades_x_pais/'+id_pais;
		$.ajax({
			type:'GET',
			url: ruta,

			success:function(data)
			{
				var entidades = data;
				for(var i = 0; i <entidades.length; i++)
				{
					$('#id_entidad').append('<option value="'+ entidades[i].id+'">'+
						entidades[i].nombre+'</option>')
				}
			}
		});
	}

	function llenar_entidades_t(id_pais)
	{
		$("#id_entidad_tutor").empty();
		var asset = '{!! asset('') !!}';
		var ruta = asset+'combo_entidades_x_pais/'+id_pais;
		$.ajax({
			type:'GET',
			url: ruta,

			success:function(data)
			{
				var entidades = data;
				for(var i = 0; i <entidades.length; i++)
				{
					$('#id_entidad_tutor').append('<option value="'+ entidades[i].id+'">'+
						entidades[i].nombre+'</option>')
				}
			}
		});
	}

	function llenar_municipios(id_entidad)
	{
		$("#id_municipio").empty();
		var asset = '{!! asset('') !!}';
		var ruta = asset+'combo_municipios_x_entidad/'+id_entidad;
		$.ajax({
			type:'GET',
			url:ruta,
			success:function(data)
			{
				var municipios = data;
				for(var i = 0; i <municipios.length; i++)
				{
					$('#id_municipio').append('<option value="'+ municipios[i].id+'">'+
						municipios[i].nombre+'</option>')
				}
			}
		});
	}

	function llenar_municipios_t(id_entidad)
	{
		$("#id_municipio_tutor").empty();
		var asset = '{!! asset('') !!}';
		var ruta = asset+'combo_municipios_x_entidad/'+id_entidad;
		$.ajax({
			type:'GET',
			url:ruta,
			success:function(data)
			{
				var municipios = data;
				for(var i = 0; i <municipios.length; i++)
				{
					$('#id_municipio_tutor').append('<option value="'+ municipios[i].id+'">'+
						municipios[i].nombre+'</option>')
				}
			}
		});
	}

	function llenar_colonias(id_municipio)
	{
		$("#id_colonia").empty();
		var asset = '{!! asset('') !!}';
		var ruta = asset+'combo_colonias_x_municipios/'+id_municipio;
		$.ajax({
			type:'GET',
			url:ruta,
			success:function(data)
			{
				var colonias = data;
				for(var i = 0; i <colonias.length; i++)
				{
					$('#id_colonia').append('<option value="'+ colonias[i].id+'">'+
						colonias[i].nombre+'</option>')
				}
			}
		});
	}

	function llenar_colonias_t(id_municipio)
	{
		$("#id_colonia_tutor").empty();
		var asset = '{!! asset('') !!}';
		var ruta = asset+'combo_colonias_x_municipios/'+id_municipio;
		$.ajax({
			type:'GET',
			url:ruta,
			success:function(data)
			{
				var colonias = data;
				for(var i = 0; i <colonias.length; i++)
				{
					$('#id_colonia_tutor').append('<option value="'+ colonias[i].id+'">'+
						colonias[i].nombre+'</option>')
				}
			}
		});
	}

	function llenar_edad()
	{
		const fecha_nacimiento = document.getElementById("fecha_nacimiento");
		const edad = document.getElementById("edad");
		const fecha_actual = new Date();
		const anioActual = parseInt(fecha_actual.getFullYear());
		const mesActual = parseInt(fecha_actual.getMonth() + 1);
		const diaActual = parseInt(fecha_actual.getDate());

		var anion = String(fecha_nacimiento.value).substring(0,4);
		var mesn = String(fecha_nacimiento.value).substring(5,7);
		var dian = String(fecha_nacimiento.value).substring(8,10);

		const anioNacimiento = parseInt(anion);
		const mesNacimiento = parseInt(mesn);
		const diaNacimiento = parseInt(dian);

		let edad2 = anioActual - anioNacimiento;
		if(mesActual < mesNacimiento)
		{
			edad2--;
		}else if(mesActual === mesNacimiento)
		{
			if(diaActual < diaNacimiento)
			{
				edad --;
			}
		}

		edad.value = edad2;
	}

	function llenar_edad_padre()
	{
		const fecha_nacimiento = document.getElementById("fecha_nacimiento_tutor");
		const edad = document.getElementById("edad_tutor");
		const fecha_actual = new Date();
		const anioActual = parseInt(fecha_actual.getFullYear());
		const mesActual = parseInt(fecha_actual.getMonth() + 1);
		const diaActual = parseInt(fecha_actual.getDate());

		var anion = String(fecha_nacimiento.value).substring(0,4);
		var mesn = String(fecha_nacimiento.value).substring(5,7);
		var dian = String(fecha_nacimiento.value).substring(8,10);

		const anioNacimiento = parseInt(anion);
		const mesNacimiento = parseInt(mesn);
		const diaNacimiento = parseInt(dian);

		let edad2 = anioActual - anioNacimiento;
		if(mesActual < mesNacimiento)
		{
			edad2--;
		}else if(mesActual === mesNacimiento)
		{
			if(diaActual < diaNacimiento)
			{
				edad --;
			}
		}

		edad.value = edad2;
	}
</script>
<script src="{!! asset('estilo/js/validar.js') !!}"></script>
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-success" align="center">Agregar un nuevo alumno.</h1>
			<br />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			{!! Form::open(['url'=>'/daraltaest', 'onsubmit'=>'return validar();', 'class'=>'form-inline']) !!}
			<h3 class="text-success" align="center">Informacion del alumno.</h3>
		    <div class="form-group">
		        {!! Form::label ('ap_paterno', 'Apellido paterno',['class'=>'text-success miest']) !!}
		        {!! Form::text ('ap_paterno',null,['placeholder'=>'Ingresa el apellido paterno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('ap_meterno', 'Apellido materno',['class'=>'text-success miest']) !!}
		        {!! Form::text ('ap_meterno',null,['placeholder'=>'Ingresa el apellido materno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('nombres', 'Nombres',['class'=>'text-success miest']) !!}
		        {!! Form::text ('nombres',null,['placeholder'=>'Ingresa los nombres', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('curp', 'Clave Unica de Registro de Población (CURP)',['class'=>'text-success miest']) !!}
		        {!! Form::text ('curp',null,['placeholder'=>'Ingresa la CURP', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('genero', 'Genero',['class'=>'text-success miest']) !!}
		        {!! Form::select ('genero', array('H'=>'Hombre', 'M'=>'Mujer'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('fecha_nacimiento', 'Fecha de nacimiento',['class'=>'text-success miest']) !!}
		        {!! Form::date ('fecha_nacimiento',null,['placeholder'=>'Ingresa la fecha de nacimiento', 'class'=>'form-control', 'onchange'=>'llenar_edad();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('edad', 'Edad del alumno (se llena automaticamente con la fecha de nacimiento)',['class'=>'text-success miest']) !!}
		        {!! Form::number ('edad',null,['placeholder'=>'Ingresa la edad del alumno', 'class'=>'form-control', 'readonly']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_grupo', 'Grupo perteneciente',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_grupo',$grupos->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('semestre', 'Semestre del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::number ('semestre',null,['placeholder'=>'Ingresa el semestre', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_carrera', 'Carrera perteneciente',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_carrera',$carreras->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('matricula', 'Matricula de usuario',['class'=>'text-success miest']) !!}
		        {!! Form::text ('matricula',null,['placeholder'=>'Ingresa la matricula', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('telefono', 'Telefono de casa',['class'=>'text-success miest']) !!}
		        {!! Form::number ('telefono',null,['placeholder'=>'Ingresa el telefono', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('celular', 'Telefono celular',['class'=>'text-success miest']) !!}
		        {!! Form::number ('celular',null,['placeholder'=>'Ingresa el telefono', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('correo', 'Correo del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::email ('correo',null,['placeholder'=>'Ingresa el correo electronico', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('facebook', 'Facebook de usuario',['class'=>'text-success miest']) !!}
		        {!! Form::text ('facebook',null,['placeholder'=>'Ingresa el facebobk', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('twitter', 'Twitter de usuario',['class'=>'text-success miest']) !!}
		        {!! Form::text ('twitter',null,['placeholder'=>'Ingresa el twitter', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('edocivil', 'Estado civil del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::select ('edocivil', array('SOLTERO(A)'=>'Soltero(a)', 'CASADO(A)'=>'Casado(a)', 'DIVORCIADO(A)'=>'Divorciado(a)', 'SEPARADO(A)'=>'Separado(a)', 'VIUDO(A)'=>'Viudo(a)', 'CONCUBINATO'=>'Concubinato'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_nacionalidad', 'Nacionalidad del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_nacionalidad',$nacionalidades->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('idiomas', 'Idiomas extras que habla',['class'=>'text-success miest']) !!}
		        {!! Form::text ('idiomas',null,['placeholder'=>'Ej. Ingles, Indigena, Ninguno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('tipo_sangre', 'Tipo de sangre',['class'=>'text-success miest']) !!}
		        {!! Form::select ('tipo_sangre', array('A+'=>'A+', 'A-'=>'A-', 'B+'=>'B+', 'B-'=>'B-', 'AB+'=>'AB+', 'AB-'=>'AB-','O+'=>'O+', 'O-'=>'O-'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('no_seguro', 'Numero de seguro social',['class'=>'text-success miest']) !!}
		        {!! Form::number ('no_seguro',null,['placeholder'=>'Ingresa el numero de seuro social', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('status_pago', 'Estatus del pago',['class'=>'text-success miest']) !!}
		        {!! Form::select ('status_pago', array('1'=>'Realizado', '0'=>'No realizado'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_generacion', 'Generacion del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_generacion',$generaciones->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('status', 'Estatus del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::select ('status', array('1'=>'Activo', '0'=>'Baja', '2'=>'Egresado'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('direccion', 'Direccion del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::text ('direccion',null,['placeholder'=>'Ingresa la direccion del alumno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_pais', 'Pais de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_pais',$paises->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control','onchange'=>'llenar_entidades(this.value);']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_entidad', 'Entidad de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_entidad',array(''=>'Seleccionar'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control', 'onchange'=>'llenar_municipios(this.value);']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_municipio', 'Municipio de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_municipio',array(''=>'Seleccionar'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control','onchange'=>'llenar_colonias(this.value);']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_colonia', 'Colonia de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_colonia',array(''=>'Seleccionar'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('observacion_direccion', 'Referencia de domicilio:',['class'=>'text-success miest']) !!}
		        {!! Form::text ('observacion_direccion',null,['placeholder'=>'Ej. Tienda enfrente, frente iglesia, etc.', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <h5 align="center" class="text-success">Entre calles:</h5>
		    <div class="form-group">
		        {!! Form::label ('calle_1', 'Calle 1',['class'=>'text-success miest']) !!}
		        {!! Form::text ('calle_1',null,['placeholder'=>'Ingresa la calle 1', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('calle_2', 'Calle 2',['class'=>'text-success miest']) !!}
		        {!! Form::text ('calle_2',null,['placeholder'=>'Ingresa la calle 1', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		<hr />
			<h3 class="text-success" align="center">Informacion del padre.</h3>
			<div class="form-group">
		        {!! Form::label ('ap_paterno_tutor', 'Apellido paterno',['class'=>'miest']) !!}
		        {!! Form::text ('ap_paterno_tutor',null,['placeholder'=>'Ingresa el apellido paterno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('ap_meterno_tutor', 'Apellido materno',['class'=>'text-success miest']) !!}
		        {!! Form::text ('ap_meterno_tutor',null,['placeholder'=>'Ingresa el apellido materno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('nombres_tutor', 'Nombres',['class'=>'text-success miest']) !!}
		        {!! Form::text ('nombres_tutor',null,['placeholder'=>'Ingresa los nombres', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('parentezco_tutor', 'Parentezco del tutor',['class'=>'text-success miest']) !!}
		        {!! Form::select ('parentezco_tutor', array('PADRE/MADRE'=>'Padre/madre', 'ABUELO(A)'=>'Abuelo(a)', 'TIO(A)'=>'Tio(a)', 'HERMANO(A)'=>'Hermano(a)', 'OTRO'=>'Otro',), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('fecha_nacimiento_tutor', 'Fecha de nacimiento',['class'=>'text-success miest']) !!}
		        {!! Form::date ('fecha_nacimiento_tutor',null,['placeholder'=>'Ingresa la fecha de nacimiento', 'class'=>'form-control','onchange'=>'llenar_edad_padre();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('edad_tutor', 'Edad del tutor (se llena automaticamente con la fecha de nacimiento)',['class'=>'text-success miest']) !!}
		        {!! Form::number ('edad_tutor',null,['placeholder'=>'Ingresa la edad del tutor', 'class'=>'form-control', 'readonly']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('ine_tutor', 'Numero de INE.',['class'=>'text-success miest']) !!}
		        {!! Form::text ('ine_tutor',null,['placeholder'=>'Parte trasea de credencial.', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('curp_tutor', 'Clave Unica de Registro de Población (CURP)',['class'=>'text-success miest']) !!}
		        {!! Form::text ('curp_tutor',null,['placeholder'=>'Ingresa la CURP', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('genero_tutor', 'Genero del tutor',['class'=>'text-success miest']) !!}
		        {!! Form::select ('genero_tutor', array('H'=>'Hombre', 'M'=>'Mujer'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('edocivil_tutor', 'Estado civil del tutor',['class'=>'text-success miest']) !!}
		        {!! Form::select ('edocivil_tutor', array('SOLTERO(A)'=>'Soltero(a)', 'CASADO(A)'=>'Casado(a)', 'DIVORCIADO(A)'=>'Divorciado(a)', 'SEPARADO(A)'=>'Separado(a)', 'VIUDO(A)'=>'Viudo(a)', 'CONCUBINATO'=>'Concubinato'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('ocupacion_tutor', 'Ocupacion del tutor',['class'=>'text-success miest']) !!}
		        {!! Form::text ('ocupacion_tutor',null,['placeholder'=>'Ej. Obrero, contador, comerciante, etc.', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('estudios_tutor', 'Grado maximo de estudios del tutor',['class'=>'text-success miest']) !!}
		        {!! Form::select ('estudios_tutor', array('PRIMARIA TRUNCA'=>'Primaria trunca', 'PRIMARIA TERMINADA'=>'Primaria terminada', 'SECUNDARIA TRUNCA'=>'Secundaria trunca', 'SECUNDARIA TERMINADA'=>'Secundaria terminada', 'PREPARATORIA TRUNCA'=>'Prepa o bachillerato trunca', 'PREPARATORIA TERMINADA'=>'Prepa o bachillerato terminada', 'UNIVERSIDAD TRUNCA'=>'Estudios superiores truncos', 'UNIVERSIDAD TERMINADA'=>'Estudios superiores terminados'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('telefono_tutor', 'Telefono de casa',['class'=>'text-success miest']) !!}
		        {!! Form::number ('telefono_tutor',null,['placeholder'=>'Ingresa el telefono', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('celular_tutor', 'Telefono celular',['class'=>'text-success miest']) !!}
		        {!! Form::number ('celular_tutor',null,['placeholder'=>'Ingresa el telefono', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('correo_tutor', 'Correo del tutor',['class'=>'text-success miest']) !!}
		        {!! Form::email ('correo_tutor',null,['placeholder'=>'Ingresa el correo electronico', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('direccion_tutor', 'Direccion del tutor',['class'=>'text-success miest']) !!}
		        {!! Form::text ('direccion_tutor',null,['placeholder'=>'Ingresa la direccion del tutor', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_pais_tutor', 'Pais de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_pais_tutor',$paises->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control','onchange'=>'llenar_entidades_t(this.value);']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_entidad_tutor', 'Entidad de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_entidad_tutor',array(''=>'Seleccionar'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control', 'onchange'=>'llenar_municipios_t(this.value);']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_municipio_tutor', 'Municipio de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_municipio_tutor',array(''=>'Seleccionar'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control','onchange'=>'llenar_colonias_t(this.value);']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('id_colonia_tutor', 'Colonia de residencia',['class'=>'text-success miest']) !!}
		        {!! Form::select ('id_colonia_tutor',array(''=>'Seleccionar'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('observacion_direccion_tutor', 'Referencia de domicilio:',['class'=>'text-success miest']) !!}
		        {!! Form::text ('observacion_direccion_tutor',null,['placeholder'=>'Ej. Tienda enfrente, frente iglesia, etc.', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <h5 align="center" class="text-success">Entre calles:</h5>
		    <div class="form-group">
		        {!! Form::label ('calle_1_tutor', 'Calle 1',['class'=>'text-success miest']) !!}
		        {!! Form::text ('calle_1_tutor',null,['placeholder'=>'Ingresa la calle 1', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('calle_2_tutor', 'Calle 2',['class'=>'text-success miest']) !!}
		        {!! Form::text ('calle_2_tutor',null,['placeholder'=>'Ingresa la calle 1', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <br />
			{!! Form::submit ('Guardar alumno',['class'=>'btn btn-success w-100']) !!}
			{!! Form::close() !!}
			<br />
			<a href="indexo" class="btn btn-warning w-100">Regresar a opciones de orientador</a>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>
<br />
<br />
@endsection()