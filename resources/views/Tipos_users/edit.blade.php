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
<h1 align="center">Editar tipo de usuario: {!! $tipo_user->nombre !!}</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['method'=>'PATCH', 'url'=>'/tipos_users/'.$tipo_user->id, 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('nombre', 'Nombre del tipo de usuario',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombre',$tipo_user->nombre,['placeholder'=>'Ingresa el nombre del tipo de usuario', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('status', 'Estatus del tipo de usuario',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('status', array('1'=>'Activo', '0'=>'Inactivo'), $tipo_user->status, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar tipo de usuario',['class'=>'btn btn-success btn-block']) !!}
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