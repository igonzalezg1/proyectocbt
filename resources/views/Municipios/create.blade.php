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

        var id_entidad = document.getElementById("id_entidad");
        if(id_entidad.value == "" || /^\s+$/.test(id_entidad.value) || id_entidad.value.length > 30){
            id_entidad.style.backgroundColor = color_error;
            ok = false;
        }else{
        id_entidad.style.backgroundColor = color_ok;
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
<h1 align="center">Crear un nuevo municipio.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['url'=>'/municipios', 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('nombre', 'Nombre del municipio',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa el nombre del municipio', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_entidad', 'Nombre de la entidad',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar municipio',['class'=>'btn btn-success btn-block']) !!}
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