@extends('template.master')
@section('contenido_central')
<script src="{!! asset('estilo/js/validar2.js') !!}"></script>
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-success" align="center">Agregar calificaciones del alumno (admisión).</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            {!! Form::open(['url'=>'/daraltacalif', 'class'=>'form-inline', 'onsubmit'=>'return validar();']) !!}
            <div class="form-group">
		    	{!! Form::label ('nombres', 'Nombre del alumno',['class'=>'text-success miest']) !!}
        		{!! Form::text ('nombres',$alumno->nombres,['placeholder'=>'Ingresa el nombre del municipio', 'class'=>'form-control', 'readonly']) !!}
		    </div>
		    <div class="form-group">
		    	{!! Form::label ('id_alumno', 'ID del alumno',['class'=>'text-success miest']) !!}
        		{!! Form::number ('id_alumno',$alumno->id,['placeholder'=>'Ingresa el nombre del municipio', 'class'=>'form-control', 'readonly']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('anio_examen', 'Año del examen',['class'=>'text-success miest']) !!}
        		{!! Form::number ('anio_examen',null,['placeholder'=>'Ingresa el año de cuando se presento el examen', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('folio', 'Folio del examen',['class'=>'text-success miest']) !!}
        		{!! Form::text ('folio',null,['placeholder'=>'Ingresa el folio del examen', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_total', 'Puntaje total',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_total',null,['placeholder'=>'Ingresa el puntaje total', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_matematico', 'Puntaje matematico',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_matematico',null,['placeholder'=>'Ingresa el puntaje de pensamiento matematico', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_analitico', 'Puntaje analitico',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_analitico',null,['placeholder'=>'Ingresa el puntaje de pensamiento analitico', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_espaniol', 'Puntaje español',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_espaniol',null,['placeholder'=>'Ingresa el puntaje de español', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_biologia', 'Puntaje biologia',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_biologia',null,['placeholder'=>'Ingresa el puntaje de biologia', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_fisica', 'Puntaje fisica',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_fisica',null,['placeholder'=>'Ingresa el puntaje de fisica', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_historia', 'Puntaje historia',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_historia',null,['placeholder'=>'Ingresa el puntaje de historia', 'class'=>'form-control']) !!}
		    </div>
            <div class="form-group">
		    	{!! Form::label ('puntaje_ingles', 'Puntaje ingles',['class'=>'text-success miest']) !!}
        		{!! Form::number ('puntaje_ingles',null,['placeholder'=>'Ingresa el puntaje de ingles', 'class'=>'form-control']) !!}
		    </div>
		    <br />
			{!! Form::submit ('Guardar calificaciones',['class'=>'btn btn-success w-100']) !!}
			{!! Form::close() !!}
			<br />
			<a href="indexo" class="btn btn-warning w-100">Agregar calificaciones en otro momento</a>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection()