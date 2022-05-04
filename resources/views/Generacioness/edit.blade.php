@extends('template.master')
@section('contenido_central')
<script>
    function validar(){
        var ok = true;
        var color_error = "#FFCCCC";
        var color_ok = "#D8FFCC";

        var nombre = document.getElementById("nombre");
        if(nombre.value == "" || /^\s+$/.test(nombre.value) || nombre.value.length > 30){
            nombre.style.backgroundColor = color_error;
            ok = false;
        }else{
        nombre.style.backgroundColor = color_ok;
        }

        var anio_inicio = document.getElementById("anio_inicio");
        if(anio_inicio.value == "" || /^\s+$/.test(anio_inicio.value) || anio_inicio.value.length > 30 || anio_inicio.value < 2014){
            anio_inicio.style.backgroundColor = color_error;
            ok = false;
        }else{
        anio_inicio.style.backgroundColor = color_ok;
        }

        var anio_fin = document.getElementById("anio_fin");
        if(anio_fin.value == "" || /^\s+$/.test(anio_fin.value) || anio_fin.value.length > 30 || anio_fin.value-3 < anio_inicio.value){
            anio_fin.style.backgroundColor = color_error;
            ok = false;
        }else{
        anio_fin.style.backgroundColor = color_ok;
        }

        if(ok == false){
            alert("Compruebe los campos en rojo");
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
<h1 align="center">Editar informacion de la generacion {!! $generacion->nombre !!}.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['method'=>'PATCH', 'url'=>'/generacioness/'.$generacion->id, 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('nombre', 'Nombre de la generacion',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombre',$generacion->nombre,['placeholder'=>'Ingresa el nombre de la generacion', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('anio_inicio', 'Año de inicio',['class'=>'text-success miest']) !!}
        {!! Form::number ('anio_inicio',$generacion->anio_inicio,['placeholder'=>'Ingresa el año de inicio', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('anio_fin', 'Año de fin',['class'=>'text-success miest']) !!}
        {!! Form::number ('anio_fin',$generacion->anio_fin,['placeholder'=>'Ingresa el nombre año de fin', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('status', 'Estatus de la generacion',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('status', array('1'=>'Activo', '0'=>'Inactivo'), $generacion->status, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar generacion',['class'=>'btn btn-success w-100']) !!}
    </div>
{!! Form::close() !!}
    </div>
</div>
</div>
<br />
<br />
<br />
<br />
@endsection()