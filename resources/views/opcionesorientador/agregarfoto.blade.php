@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<br />
<br />

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-success" align="center">Agregar foto del alumno.</h1>
			<br />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			{!! Form::open(['url'=>'/daraltafoto', 'class'=>'form-inline', 'enctype'=>'multipart/form-data']) !!}
		    <div class="form-group">
		    	{!! Form::label ('nombres', 'Nombre del alumno',['class'=>'text-success miest']) !!}
        		{!! Form::text ('nombres',$alumno->nombres,['placeholder'=>'Ingresa el nombre del municipio', 'class'=>'form-control', 'readonly']) !!}
		    </div>
		    <div class="form-group">
		    	{!! Form::label ('id_alumno', 'ID del alumno',['class'=>'text-success miest']) !!}
        		{!! Form::number ('id_alumno',$alumno->id,['placeholder'=>'Ingresa el nombre del municipio', 'class'=>'form-control', 'readonly']) !!}
		    </div>
		    <div class="form-group">
		    	{!! Form::label ('ruta', 'Subir una imagen',['class'=>'text-success miest']) !!}
        		{!! Form::file ('ruta',['class'=>'form-control', 'readonly']) !!}
		    </div>
		    <br />
			{!! Form::submit ('Guardar alumno',['class'=>'btn btn-success w-100']) !!}
			{!! Form::close() !!}
			<br />
			<a href="indexo" class="btn btn-warning w-100">Agregar foto en otro momento</a>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>
<br />
<br />
<br />
<br />
@endsection()