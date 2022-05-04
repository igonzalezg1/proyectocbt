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

        var id_pais = document.getElementById("id_pais");
        if(id_pais.value == "" || /^\s+$/.test(id_pais.value) || id_pais.value.length > 30){
            id_pais.style.backgroundColor = color_error;
            ok = false;
        }else{
        id_pais.style.backgroundColor = color_ok;
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
<h1 align="center">Editar entidad: {!! $entidad->nombre !!}.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['method'=>'PATCH', 'url'=>'/entidades/'.$entidad->id, 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('nombre', 'Nombre de la entidad',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombre',$entidad->nombre,['placeholder'=>'Ingresa el nombre de la entidad', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_pais', 'Nombre de pais',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('id_pais',$paises->pluck('nombre','id')->all(), $entidad->id_pais, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar entidad',['class'=>'btn btn-success btn-block']) !!}
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