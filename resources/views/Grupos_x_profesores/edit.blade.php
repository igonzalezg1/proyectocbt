@extends('template.master')
@section('contenido_central')
<script>
    function validar(){
        var ok = true;
        var color_error = "#FFCCCC";
        var color_ok = "#D8FFCC";

        var id_grupo = document.getElementById("id_grupo");
        if(id_grupo.value == "" || /^\s+$/.test(id_grupo.value) || id_grupo.value.length > 50){
            id_grupo.style.backgroundColor = color_error;
            ok = false;
        }else{
        id_grupo.style.backgroundColor = color_ok;
        }

        var id_profesor = document.getElementById("id_profesor");
        if(id_profesor.value == "" || /^\s+$/.test(id_profesor.value) || id_profesor.value.length > 50){
            id_profesor.style.backgroundColor = color_error;
            ok = false;
        }else{
        id_profesor.style.backgroundColor = color_ok;
        }

        var status = document.getElementById("status");
        if(status.value == "" || /^\s+$/.test(status.value) || status.value.length > 30){
            status.style.backgroundColor = color_error;
            ok = false;
        }else{
        status.style.backgroundColor = color_ok;
        }

        if(ok == false){
            alert("Compruebe los campos en rojo");
        }

        return ok;
        
    }

</script>
<br />
<br />
<br />
<br />
<h1 align="center">Editar grupo del profesor: {!! $grupo_x_profesor->profesores->nombres !!}.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['method'=>'PATCH', 'url'=>'/grupos_x_profesores/'.$grupo_x_profesor->id, 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('id_grupo', 'Nombre del grupo',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('id_grupo',$grupos->pluck('nombre','id')->all(), $grupo_x_profesor->id_grupo, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        {!! Form::label ('id_profesor', 'Nombre del profesor',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('id_profesor',$profesores->pluck('nombres','id')->all(), $grupo_x_profesor->id_profesor, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        {!! Form::label ('status', 'Estatus de la carrera',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('status', array('1'=>'Activo', '0'=>'Inactivo'), $grupo_x_profesor->status, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar grupo por profesor',['class'=>'btn btn-success btn-block']) !!}
    </div>
{!! Form::close() !!}
    </div>
</div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
@endsection()