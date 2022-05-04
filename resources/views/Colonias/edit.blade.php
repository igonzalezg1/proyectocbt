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

        var id_municipio = document.getElementById("id_municipio");
        if(id_municipio.value == "" || /^\s+$/.test(id_municipio.value) || id_municipio.value.length > 30){
            id_municipio.style.backgroundColor = color_error;
            ok = false;
        }else{
        id_municipio.style.backgroundColor = color_ok;
        }

        var tipo_asentamiento = document.getElementById("tipo_asentamiento");
        if(tipo_asentamiento.value == "" || /^\s+$/.test(tipo_asentamiento.value) || tipo_asentamiento.value.length > 30){
            tipo_asentamiento.style.backgroundColor = color_error;
            ok = false;
        }else{
        tipo_asentamiento.style.backgroundColor = color_ok;
        }

        var cp = document.getElementById("cp");
        if(cp.value == "" || /^\s+$/.test(cp.value) || cp.value.length > 30){
            cp.style.backgroundColor = color_error;
            ok = false;
        }else{
        cp.style.backgroundColor = color_ok;
        }

        var ciudad = document.getElementById("ciudad");
        if(ciudad.value == "" || /^\s+$/.test(ciudad.value) || ciudad.value.length > 30){
            ciudad.style.backgroundColor = color_error;
            ok = false;
        }else{
        ciudad.style.backgroundColor = color_ok;
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
<h1 align="center">Editar colonia: {!! $colonia->nombre !!}.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['method'=>'PATCH', 'url'=>'/colonias/'.$colonia->id, 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('nombre', 'Nombre de la colonia.',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombre',$colonia->nombre,['placeholder'=>'Ingresa el nombre de la colonia', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('ciudad', 'Nombre de la ciudad.',['class'=>'text-success miest']) !!}
        {!! Form::text ('ciudad',$colonia->ciudad,['placeholder'=>'Ingresa el nombre de la ciudad donde pertenece', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('tipo_asentamiento', 'Tipo de asentamiento',['class'=>'text-success miest']) !!}
        {!! Form::select ('status', array('Colonia'=>'Colonia', 'Fraccionamiento'=>'Fraccionamiento', 'Pueblo'=>'Pueblo', 'Rancheria'=>'Rancheria','Hacienda'=>'Hacienda','Ejido'=>'Ejido','Barrio'=>'Barrio','Unidad Habitacional'=>'Unidad Habitacional', 'Poblado Comunal'=>'Poblado Comunal','Congregación'=>'Congragación','Ampliación'=>'Ampliación', 'Zona Industrial'=>'Zona Industrial'),$colonia->tipo_asentamiento, ['placeholder'=>'Seleccionar','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('cp', 'Codigo postal.',['class'=>'text-success miest']) !!}
        {!! Form::number ('cp',$colonia->cp,['placeholder'=>'Ingresa el codigo postal', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_municipio', 'Nombre del municipio',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('id_municipio', $municipios->pluck('nombre','id')->all(), $colonia->id_municipio, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <br />
    <div class="form-group">
        {!! Form::submit ('Guardar colonia',['class'=>'btn btn-success btn-block']) !!}
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