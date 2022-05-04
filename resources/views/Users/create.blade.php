@extends('template.master')
@section('contenido_central')
<script>
    function validar(){
        var ok = true;
        var color_error = "#FFCCCC";
        var color_ok = "#D8FFCC";

        var ap_paterno = document.getElementById("ap_paterno");
        if(ap_paterno.value == "" || /^\s+$/.test(ap_paterno.value) || ap_paterno.value.length > 30){
            ap_paterno.style.backgroundColor = color_error;
            ok = false;
        }else{
        ap_paterno.style.backgroundColor = color_ok;
        }

        var ap_meterno = document.getElementById("ap_meterno");
        if(ap_meterno.value == "" || /^\s+$/.test(ap_meterno.value) || ap_meterno.value.length > 30){
            ap_meterno.style.backgroundColor = color_error;
            ok = false;
        }else{
        ap_meterno.style.backgroundColor = color_ok;
        }

        var nombres = document.getElementById("nombres");
        if(nombres.value == "" || /^\s+$/.test(nombres.value) || nombres.value.length > 30){
            nombres.style.backgroundColor = color_error;
            ok = false;
        }else{
        nombres.style.backgroundColor = color_ok;
        }

        var id_tipo_user = document.getElementById("id_tipo_user");
        if(id_tipo_user.value == "" || /^\s+$/.test(id_tipo_user.value) || id_tipo_user.value.length > 30){
            id_tipo_user.style.backgroundColor = color_error;
            ok = false;
        }else{
        id_tipo_user.style.backgroundColor = color_ok;
        }

        var correo = document.getElementById("correo");
        var valic =/^[\w]+@{1}[\w]+[a-z]{2,3}$/;
        if (correo.value=="" || /^\s+$/.test(correo.value)) {
            correo.style.backgroundColor = color_error;
            ok = false;
        }else{
            correo.style.backgroundColor = color_ok;
        }

        var username = document.getElementById("username");
        if(username.value == "" || /^\s+$/.test(username.value) || username.value.length > 30){
            username.style.backgroundColor = color_error;
            ok = false;
        }else{
        username.style.backgroundColor = color_ok;
        }

        var password = document.getElementById("password");
        if(password.value == "" || /^\s+$/.test(password.value) || password.value.length > 30){
            password.style.backgroundColor = color_error;
            ok = false;
        }else{
        password.style.backgroundColor = color_ok;
        }

        var rpassword = document.getElementById("rpassword");
        if(rpassword.value == "" || /^\s+$/.test(rpassword.value) || rpassword.value.length > 30 || rpassword.value != password.value){
            rpassword.style.backgroundColor = color_error;
            ok = false;
        }else{
        rpassword.style.backgroundColor = color_ok;
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
<h1 align="center">Crear un nuevo usuario.</h1>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['url'=>'/users', 'onsubmit'=>'return validar();']) !!}
    <div class="form-group">
        {!! Form::label ('ap_paterno', 'Apellido paterno',['class'=>'text-success miest']) !!}
        {!! Form::text ('ap_paterno',null,['placeholder'=>'Ingresa el apellido paterno', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('ap_meterno', 'Apellido materno',['class'=>'text-success miest']) !!}
        {!! Form::text ('ap_meterno',null,['placeholder'=>'Ingresa el apellido materno', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('nombres', 'Nombres',['class'=>'text-success miest']) !!}
        {!! Form::text ('nombres',null,['placeholder'=>'Ingresa los nombres', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_tipo_user', 'Tipos de usuario',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('id_tipo_user',$tipos_users->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        {!! Form::label ('correo', 'Correo electronico',['class'=>'text-success miest']) !!}
        {!! Form::email ('correo',null,['placeholder'=>'Ingresa el correo electronico', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('username', 'Nombre de usuario',['class'=>'text-success miest']) !!}
        {!! Form::text ('username',null,['placeholder'=>'Ingresa el nombre usuario', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('password', 'Password',['class'=>'text-success miest']) !!}
        {!! Form::password ('password',null,['placeholder'=>'Ingresa el password', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('rpassword', 'Repita el password',['class'=>'text-success miest']) !!}
        {!! Form::password ('rpassword',null,['placeholder'=>'Ingresa el password nuevamente', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('status', 'Estatus del usuario',['class'=>'text-success miest']) !!}
        <br />
        {!! Form::select ('status', array('1'=>'Activo', '0'=>'Inactivo'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        <br />
        {!! Form::submit ('Guardar usuario',['class'=>'btn btn-success btn-block']) !!}
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