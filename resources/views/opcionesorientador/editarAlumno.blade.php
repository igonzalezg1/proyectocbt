@extends('template.master')
@section('contenido_central')
<style>
	hr{
		height: 15px;
		background-color: green;
	}
</style>
<script src="{!! asset('estilo/js/validar3.js') !!}"></script>
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
            <h2 align="center" class="text-success">EDITAR INFORMACION DE {!! $alumno->nombres !!}</h2>
            <h4 align="center">Informacion no editable:</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <img src="{!! asset('storage') !!}{!! '/'.$foto_alumno->ruta !!}" width="350px">
        </div>
        <div class="col-sm-4"></div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
						<th>Apellidos</th>
                        <th>Nombre(s)</th>
                        <th>CURP</th>
						<th>Genero</th>
						<th>Fecha de nacimiento</th>
                        <th>Edad</th>
                        <th>Semestre</th>
                        <th>Carrera</th>
                        <th>Matricula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{!! $alumno->ap_paterno !!} {!! $alumno->ap_meterno !!}</th>
                        <th>{!! $alumno->nombres !!}</th>
                        <th>{!! $alumno->curp !!}</th>
                        <th>
                            @if ($alumno->genero == 'H')
                                Masculino
                            @else
                                Femenino         
                            @endif
                        </th>
                        <th>{!! $alumno->fecha_nacimiento !!}</th>
                        <th>{!! $alumno->edad !!}</th>
                        <th>{!! $alumno->semestre !!}</th>
                        <th>{!! $alumno->carreras->nombre !!}</th>
                        <th>{!! $alumno->matricula !!}</th>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
						<th>Nacionalidad</th>
                        <th>Tipo de sangre</th>
                        <th>Numero de seguro</th>
						<th>Status de pago</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{!! $alumno->nacionalidades->nombre !!}</th>
                        <th>{!! $alumno->tipo_sangre !!}</th>
                        <th>{!! $alumno->no_seguro !!}</th>
                        <th>
                            @if ($alumno->stauts_pago == 1)
                                Realizado
                            @else
                                No realizado         
                            @endif
                        </th>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
						<th>Apellidos del tutor</th>
                        <th>Nombre(s) del tutor</th>
                        <th>CURP del tutor</th>
						<th>Genero del tutor</th>
						<th>Fecha de nacimiento del tutor</th>
                        <th>Edad del tutor</th>
                        <th>Parentezco</th>
                        <th>INE del tutor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{!! $alumno->ap_paterno_tutor !!} {!! $alumno->ap_meterno_tutor !!}</th>
                        <th>{!! $alumno->nombres_tutor !!}</th>
                        <th>{!! $alumno->curp_tutor !!}</th>
                        <th>
                            @if ($alumno->genero_tutor == 'H')
                                Masculino
                            @else
                                Femenino         
                            @endif
                        </th>
                        <th>{!! $alumno->fecha_nacimiento_tutor !!}</th>
                        <th>{!! $alumno->edad_tutor !!}</th>
                        <th>{!! $alumno->parentezco_tutor !!}</th>
                        <th>{!! $alumno->ine_tutor !!}</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h4 align="center">Informacion por Editar:</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            {!! Form::open(['url'=>'/editarinfodeest/'.$alumno->id, 'onsubmit'=>'return validar();', 'class'=>'form-inline']) !!}
			<h3 class="text-success" align="center">Informacion del alumno.</h3>
		    <div class="form-group">
		        {!! Form::label ('telefono', 'Telefono del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::number ('telefono',null,['placeholder'=>'Ingresa el telefono del alumno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
		    <div class="form-group">
		        {!! Form::label ('celular', 'Celular del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::number ('celular',null,['placeholder'=>'Ingresa el celular del alumno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
            <div class="form-group">
		        {!! Form::label ('correo', 'Correo del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::email ('correo',null,['placeholder'=>'Ingresa el correo del alumno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
            <div class="form-group">
		        {!! Form::label ('facebook', 'Facebook del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::text ('facebook',null,['placeholder'=>'Ingresa el Facebook del alumno', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		        {!! Form::label ('twitter', 'Twitter del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::text ('twitter',null,['placeholder'=>'Ingresa el Twitter del alumno', 'class'=>'form-control', 'onkeyup'=>'javascript:this.value = this.value.toUpperCase();']) !!}
		    </div>
            <div class="form-group">
		        {!! Form::label ('edocivil', 'Estado civil del alumno',['class'=>'text-success miest']) !!}
		        {!! Form::select ('edocivil', array('SOLTERO(A)'=>'Soltero(a)', 'CASADO(A)'=>'Casado(a)', 'DIVORCIADO(A)'=>'Divorciado(a)', 'SEPARADO(A)'=>'Separado(a)', 'VIUDO(A)'=>'Viudo(a)', 'CONCUBINATO'=>'Concubinato'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
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
			<a href="indexo" class="btn btn-primary w-100">Regresar a opciones de orientador</a>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<br />
<br />
@endsection()