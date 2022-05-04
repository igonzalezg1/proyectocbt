@extends('template.master')
@section('contenido_central')
<script>
	function buscar_id(id_alumno){
		var asset = '{!! asset('') !!}';
		var ruta = asset+'buscar_x_id/'+id_alumno;

		$.ajax({
			type:'GET',
			url: ruta,

			success:function(data)
			{
				var alumno = data;
				var nasset = "{!! asset('storage') !!}";
				var nrutap = nasset + '/' + alumno.ruta;
				var nruta = nasset + nrutap;
				document.getElementById('foto').src = nrutap;
				document.getElementById('ap_paterno').innerHTML = "Apellido paterno: " + alumno.ap_paterno;
				document.getElementById('ap_meterno').innerHTML = "Apellido materno: " + alumno.ap_meterno;
				document.getElementById('nombres').innerHTML = "Nombre(s): " + alumno.nombres;
				if(alumno.id_carrera == 1)
				{
					var ncarera = "Tecnico en Informatica";
				}else if(alumno.id_carrera == 2)
				{
					var ncarera = "Tecnico en contabilidad";
				}else if(alumno.id_carrera == 3)
				{
					var ncarera = "Tecnico en diseño asistido por computadora";
				}
				document.getElementById('id_carrera').innerHTML = "Carrera: " + ncarera;
				if(alumno.id_grupo == 1)
				{
					var ngrupo = '1° "1"';
				}else if(alumno.id_grupo == 2)
				{
					var ngrupo = '1° "2"';
				}else if(alumno.id_grupo == 3)
				{
					var ngrupo = '1° "3"';
				}else if(alumno.id_grupo == 4)
				{
					var ngrupo = '1° "4"';
				}else if(alumno.id_grupo == 5)
				{
					var ngrupo = '2° "1"';
				}else if(alumno.id_grupo == 6)
				{
					var ngrupo = '2° "2"';
				}else if(alumno.id_grupo == 7)
				{
					var ngrupo = '2° "3"';
				}else if(alumno.id_grupo == 8)
				{
					var ngrupo = '2° "4"';
				}else if(alumno.id_grupo == 9)
				{
					var ngrupo = '3° "1"';
				}else if(alumno.id_grupo == 10)
				{
					var ngrupo = '3° "2"';
				}else if(alumno.id_grupo == 11)
				{
					var ngrupo = '3° "3"';
				}else if(alumno.id_grupo == 12)
				{
					var ngrupo = '3° "4"';
				}
				document.getElementById('id_grupo').innerHTML = "Grupo: " + ngrupo;
				document.getElementById('curp').innerHTML = "CURP: " + alumno.curp;
				document.getElementById('fecha_nacimiento').innerHTML = "Fecha de nacimiento(AAAA-MM-DD): "+ alumno.fecha_nacimiento;
				document.getElementById('semestre').innerHTML = "Semestre actual: " + alumno.semestre + "°";
				document.getElementById('matricula').innerHTML = "Matricula: " + alumno.matricula;
				document.getElementById('telefono').innerHTML = "Telefono personal: " + alumno.telefono;
				document.getElementById('celular').innerHTML = "Celular: " +alumno.celular;
				document.getElementById('correo').innerHTML = "Correo electronico:" + alumno.correo;
				document.getElementById('facebook').innerHTML = "Facebook personal: " + alumno.facebook;
				document.getElementById('twitter').innerHTML = "Twitter personal: " + alumno.twitter;
				document.getElementById('edocivil').innerHTML = "Estado civil: " + alumno.edocivil;
				var nacionalidad = alumno.id_nacionalidad;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_nacionalidad/'+nacionalidad;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var nacio = data;
						document.getElementById('nacionalidad').innerHTML = "Nacionalidad: " + nacio.nombre;
					}
				});

				document.getElementById('idiomas').innerHTML = "Idiamas extras que habla: " + alumno.idiomas;
				document.getElementById('tipo_sangre').innerHTML = "Tipo de sangre: " + alumno.tipo_sangre;
				document.getElementById('no_seguro').innerHTML = "Numero de seguro social: " + alumno.no_seguro;
				if(alumno.status_pago == 1)
				{
					var epago = "Estado del pago: Realizado";
				}else if(alumno.status_pago == 1)
				{
					var epago = "Estado del pago: No realizado";
				}
				document.getElementById('status_pago').innerHTML = epago;
				document.getElementById('direccion').innerHTML = alumno.direccion;
				document.getElementById('calles').innerHTML = "Entre las calles: " + alumno.calle_1 + " y " + alumno.calle_2;
				document.getElementById('observacion_direccion').innerHTML = "Referencia de domicilio: " + alumno.observacion_direccion;
				
				var paisr = alumno.id_pais;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_pais/'+paisr;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var paisres = data;
						document.getElementById('id_pais').innerHTML = "Pais de residencia: " + paisres.nombre;
					}
				});

				var entidadr = alumno.id_entidad;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_entidad/'+entidadr;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var entidadres = data;
						document.getElementById('id_entidad').innerHTML = "Entidad de residencia: " + entidadres.nombre;
					}
				});

				var municipior = alumno.id_municipio;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_municipio/'+municipior;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var municipiores = data;
						document.getElementById('id_municipio').innerHTML = "Municipio de residencia: " + municipiores.nombre;
					}
				});

				var coloniar = alumno.id_colonia;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_colonia/'+coloniar;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var coloniares = data;
						document.getElementById('id_colonia').innerHTML = "Colonia de residencia: " + coloniares.nombre;
					}
				});

				var generacionr = alumno.id_generacion;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_generacion/'+generacionr;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var generacionres = data;
						document.getElementById('id_generacion').innerHTML = "Generacion: " + generacionres.nombre;
					}
				});

				if(alumno.status == 1)
				{
					var status = "Estado del alumno: Activo";
				}else if(alumno.status == 0)
				{
					var status = "Estado del alumno: Baja";
				}else if(alumno.status == 2)
				{
					var status = "Estado del alumno: Egresado";
				}
				document.getElementById('status').innerHTML = status;

				if(alumno.genero_tutor == 'M')
				{
					var gen = 'Mujer';
				}else
				{
					var gen = 'Hombre';
				}

				document.getElementById('ap_paterno_tutor').innerHTML = "Apellido paterno del tutor: " + alumno.ap_paterno_tutor;
				document.getElementById('ap_meterno_tutor').innerHTML = "Apellido materno del tutor: " + alumno.ap_meterno_tutor;
				document.getElementById('nombres_tutor').innerHTML = "Nombre(s) del tutor: " + alumno.nombres_tutor;
				document.getElementById('parentezco_tutor').innerHTML = "Parentezco: " + alumno.parentezco_tutor;
				document.getElementById('fecha_nacimiento_tutor').innerHTML = "Fecha de nacimiento del tutor: " + alumno.fecha_nacimiento_tutor;
				document.getElementById('edad_tutor').innerHTML = "Edad del tutor: " + alumno.edad_tutor;
				document.getElementById('ine_tutor').innerHTML = "ine_tutor: " + alumno.ine_tutor;
				document.getElementById('curp_tutor').innerHTML = "CURP del tutor: " + alumno.curp_tutor;
				document.getElementById('genero_tutor').innerHTML = "Genero del tutor: " + gen;
				document.getElementById('edocivil_tutor').innerHTML = "Estado civil del tutor: " + alumno.edocivil_tutor;
				document.getElementById('ocupacion_tutor').innerHTML = "Ocupacion del tutor: " + alumno.ocupacion_tutor;
				document.getElementById('estudios_tutor').innerHTML = "Estudios del tutor: " + alumno.estudios_tutor;
				document.getElementById('correo_tutor').innerHTML = "Correo del tutor: " + alumno.correo_tutor;
				document.getElementById('direccion_tutor').innerHTML = "Direccion del tutor: " + alumno.direccion_tutor;
				document.getElementById('telefono_tutor').innerHTML = "Telefono del tutor: " + alumno.telefono_tutor;
				document.getElementById('celular_tutor').innerHTML = "Celular del tutor: " + alumno.celular_tutor;
				document.getElementById('observacion_direccion_tutor').innerHTML = "Referencia de domicilio: " + alumno.observacion_direccion_tutor;
				document.getElementById('calles_tutor').innerHTML = "Entre las calles: " + alumno.calle_1_tutor + " y " + alumno.calle_2_tutor;

				var paisr_t = alumno.id_pais_tutor;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_pais/'+paisr_t;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var paisres = data;
						document.getElementById('id_pais_tutor').innerHTML = "Pais de residencia: " + paisres.nombre;
					}
				});

				var entidadr_t = alumno.id_entidad_tutor;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_entidad/'+entidadr_t;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var entidadres = data;
						document.getElementById('id_entidad_tutor').innerHTML = "Entidad de residencia: " + entidadres.nombre;
					}
				});

				var municipior_t = alumno.id_municipio_tutor;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_municipio/'+municipior_t;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var municipiores = data;
						document.getElementById('id_municipio_tutor').innerHTML = "Municipio de residencia: " + municipiores.nombre;
					}
				});

				var coloniar_t = alumno.id_colonia_tutor;
				var asset = '{!! asset('') !!}';
				var ruta = asset+'buscar_colonia/'+coloniar_t;
				$.ajax({
					type:'GET',
					url: ruta,
					success:function(data)
					{
						var coloniares = data;
						document.getElementById('id_colonia_tutor').innerHTML = "Colonia de residencia: " + coloniares.nombre;
					}
				});
			}
		});
	}
</script>
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-success" align="center">Buscar alumno por ID</h2>
			<br />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="form-inline">
				<label for="id_alumno" class="text-success miest">Ingresa un ID</label>
				<input type="text" name="id_alumno" id="id_alumno" class="" placeholder="Ingresa el ID a buscar">
				<a class="btn btn-primary btn-block" onclick="buscar_id(id_alumno.value);"><i class="bi bi-search"></i></a>
			</div>
		</div>
		<div class="col-sm-4"></div>
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
			<img src="{!! asset('estilo/images/iconos/user.png') !!}" width="250px" id="foto">
			<br />
			<h6 class="text-success" id="status">Estado del alumno:</h6>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="ap_paterno">Apellido paterno:</h6>
			<h6 class="text-success" id="ap_meterno">Apellido materno:</h6>
			<h6 class="text-success" id="nombres">Nombre(s):</h6>
			<h6 class="text-success" id="id_carrera">Carrera:</h6>
			<h6 class="text-success" id="id_grupo">Grupo:</h6>
			<h6 class="text-success" id="curp">CURP:</h6>
			<h6 class="text-success" id="fecha_nacimiento">Fecha de nacimiento(AAAA-MM-DD):</h6>
			<h6 class="text-success" id="semestre">Semestre actual:</h6>
			<h6 class="text-success" id="matricula">Matricula:</h6>
			<h6 class="text-success" id="telefono">Telefono personal:</h6>
			<h6 class="text-success" id="celular">Celular:</h6>
			<h6 class="text-success" id="id_entidad">Entidad de residencia:</h6>
			<h6 class="text-success" id="id_municipio">Municipio de residencia:</h6>
			<h6 class="text-success" id="calles">Entre las calles:</h6>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="correo">Correo electronico:</h6>
			<h6 class="text-success" id="facebook">Facebook personal:</h6>
			<h6 class="text-success" id="twitter">Twitter personal:</h6>
			<h6 class="text-success" id="edocivil">Estado Civil:</h6>
			<h6 class="text-success" id="nacionalidad">Nacionalidad:</h6>
			<h6 class="text-success" id="idiomas">Idiamas extras que habla:</h6>
			<h6 class="text-success" id="tipo_sangre">Tipo de sangre:</h6>
			<h6 class="text-success" id="no_seguro">Numero de seguro social:</h6>
			<h6 class="text-success" id="status_pago">Estado del pago:</h6>
			<h6 class="text-success" id="direccion">Direccion:</h6>
			<h6 class="text-success" id="id_pais">Pais de residencia:</h6>
			<h6 class="text-success" id="id_colonia">Colonia de residencia:</h6>
			<h6 class="text-success" id="observacion_direccion">Referencia de domicilio:</h6>
			<h6 class="text-success" id="id_generacion">Generacion:</h6>
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
			<h6 class="text-success" id="ap_paterno_tutor">Apellido paterno del tutor:</h6>
			<h6 class="text-success" id="ap_meterno_tutor">Apellido materno del tutor:</h6>
			<h6 class="text-success" id="nombres_tutor">Nombre(s) del tutor:</h6>
			<h6 class="text-success" id="parentezco_tutor">Parentezco:</h6>
			<h6 class="text-success" id="fecha_nacimiento_tutor">Fecha de nacimiento del tutor:</h6>
			<h6 class="text-success" id="edad_tutor">Edad del tutor:</h6>
			<h6 class="text-success" id="ine_tutor">INE del tutor:</h6>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="curp_tutor">CURP del tutor:</h6>
			<h6 class="text-success" id="genero_tutor">Genero del tutor:</h6>
			<h6 class="text-success" id="edocivil_tutor">Estado civil del tutor:</h6>
			<h6 class="text-success" id="ocupacion_tutor">Ocupacion del tutor:</h6>
			<h6 class="text-success" id="estudios_tutor">Estudios del tutor:</h6>
			<h6 class="text-success" id="correo_tutor">Correo del tutor:</h6>
			<h6 class="text-success" id="direccion_tutor">Direccion del tutor:</h6>
		</div>
		<div class="col-sm-4">
			<h6 class="text-success" id="telefono_tutor">Telefono del tutor:</h6>
			<h6 class="text-success" id="celular_tutor">Celular del tutor:</h6>
			<h6 class="text-success" id="id_pais_tutor">Pais de residencia:</h6>
			<h6 class="text-success" id="id_entidad_tutor">Entidad de residencia:</h6>
			<h6 class="text-success" id="id_municipio_tutor">Municipio de residencia:</h6>
			<h6 class="text-success" id="id_colonia_tutor">Colonia de residencia:</h6>
			<h6 class="text-success" id="observacion_direccion_tutor">Referencia de domicilio:</h6>
			<h6 class="text-success" id="calles_tutor">Entre calles:</h6>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<a href="indexo" class="btn btn-primary w-100">Regresar a opciones de orientador</a>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<br />
<br />
@endsection()