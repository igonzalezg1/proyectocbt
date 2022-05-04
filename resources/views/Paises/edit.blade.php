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
<h1 align="center">Editar pais: {!! $pais->nombre !!}.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['method'=>'PATCH', 'url'=>'/paises/'.$pais->id, 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('nombre', 'Nombre del país',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombre',$pais->nombre,['placeholder'=>'Ingresa el nombre del país', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar país',['class'=>'btn btn-success btn-block']) !!}
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
<br />
<br />
@endsection()