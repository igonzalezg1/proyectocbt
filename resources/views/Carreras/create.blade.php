@extends('template.master')
@section('contenido_central')
<script>
    function validar(){
        var ok = true;
        var color_error = "#FFCCCC";
        var color_ok = "#D8FFCC";

        var nombre = document.getElementById("nombre");
        if(nombre.value == "" || /^\s+$/.test(nombre.value) || nombre.value.length > 50){
            nombre.style.backgroundColor = color_error;
            ok = false;
        }else{
        nombre.style.backgroundColor = color_ok;
        }

        var clave = document.getElementById("clave");
        if(clave.value == "" || /^\s+$/.test(clave.value) || clave.value.length > 5){
            alert("La clave debe ser menor a 5 caracteres");
            clave.style.backgroundColor = color_error;
            ok = false;
        }else{
        clave.style.backgroundColor = color_ok;
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
<h1 align="center">Crear una nueva carrera.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['url'=>'/carreras', 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('nombre', 'Nombre de la carrera',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa el nombre de la carrera', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('clave', 'Clave de la carrera',['class'=>'text-success miest']) !!}
        {!! Form::text ('clave',null,['placeholder'=>'Ingresa la clave de la carrera', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('status', 'Estatus de la carrera',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('status', array('1'=>'Activo', '0'=>'Inactivo'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar carrera',['class'=>'btn btn-success btn-block']) !!}
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