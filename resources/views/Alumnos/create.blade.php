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
<h1 align="center">Crear un nuevo alumno.</h1>
<h2 align="center">Datos del alumno.</h2>
<br />
<div class="container">
<div class="row">
    <div class="col-sm-12">
    {!! Form::open(['url'=>'/alumnos', 'onsubmit'=>'return validar();']) !!}
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
        {!! Form::label ('curp', 'Clave Unica de Registro de Población (CURP)',['class'=>'text-success miest']) !!}
        {!! Form::text ('curp',null,['placeholder'=>'Ingresa la CURP', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('genero', 'Genero',['class'=>'text-success miest']) !!}
        {!! Form::select ('genero', array('H'=>'Hombre', 'M'=>'Mujer'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('fecha_nacimiento', 'Fecha de nacimiento',['class'=>'text-success miest']) !!}
        {!! Form::date ('fecha_nacimiento',null,['placeholder'=>'Ingresa la fecha de nacimiento', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('edad', 'Edad del alumno',['class'=>'text-success miest']) !!}
        {!! Form::number ('edad',null,['placeholder'=>'Ingresa la edad del alumno', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_grupo', 'Grupo perteneciente',['class'=>'text-success miest']) !!}
        {!! Form::select ('id_grupo',$grupos->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('semestre', 'Semestre del alumno',['class'=>'text-success miest']) !!}
        {!! Form::number ('semestre',null,['placeholder'=>'Ingresa el semestre', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_carrera', 'Carrera perteneciente',['class'=>'text-success miest']) !!}
        {!! Form::select ('id_carrera',$carreras->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('matricula', 'Matricula de usuario',['class'=>'text-success miest']) !!}
        {!! Form::text ('matricula',null,['placeholder'=>'Ingresa la matricula', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('telefono', 'Telefono de casa',['class'=>'text-success miest']) !!}
        {!! Form::number ('telefono',null,['placeholder'=>'Ingresa el telefono', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('celular', 'Telefono celular',['class'=>'text-success miest']) !!}
        {!! Form::number ('celular',null,['placeholder'=>'Ingresa el telefono', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('correo', 'Correo del alumno',['class'=>'text-success miest']) !!}
        {!! Form::email ('correo',null,['placeholder'=>'Ingresa el correo electronico', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('facebook', 'Facebook de usuario',['class'=>'text-success miest']) !!}
        {!! Form::text ('facebook',null,['placeholder'=>'Ingresa el facebobk', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('twitter', 'Twitter de usuario',['class'=>'text-success miest']) !!}
        {!! Form::text ('twitter',null,['placeholder'=>'Ingresa el twitter', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('edocivil', 'Estado civil del alumno',['class'=>'text-success miest']) !!}
        {!! Form::select ('edocivil', array('soltero'=>'Soltero(a)', 'casado'=>'Casado(a)', 'divorciado'=>'Divorciado(a)', 'separado'=>'Separado(a)', 'viudo'=>'Viudo(a)', 'concubinato'=>'Concubinato'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_nacionalidad', 'Nacionalidad del alumno',['class'=>'text-success miest']) !!}
        {!! Form::select ('id_nacionalidad',$nacionaidades->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('idiomas', 'Idiomas extras que habla',['class'=>'text-success miest']) !!}
        {!! Form::text ('idiomas',null,['placeholder'=>'Ej. Ingles, Indigena, Ninguno', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('tipo_sangre', 'Tipo de sangre',['class'=>'text-success miest']) !!}
        {!! Form::select ('tipo_sangre', array('A+'=>'A+', 'A-'=>'A-', 'B+'=>'B+', 'B-'=>'B-', 'AB+'=>'AB+', 'AB-'=>'AB-','O+'=>'O+', 'O-'=>'O-'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('no_seguro', 'Numero de seguro social',['class'=>'text-success miest']) !!}
        {!! Form::number ('no_seguro',null,['placeholder'=>'Ingresa el numero de seuro social', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('status_pago', 'Estatus del pago',['class'=>'text-success miest']) !!}
        {!! Form::select ('status_pago', array('1'=>'Realizado', '0'=>'No realizado'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_generacion', 'Generacion del alumno',['class'=>'text-success miest']) !!}
        {!! Form::select ('id_generacion',$generaciones->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('status', 'Estatus del alumno',['class'=>'text-success miest']) !!}
        {!! Form::select ('status', array('1'=>'Activo', '0'=>'Baja', '2'=>'Egresado'), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
        <br />
    </div>
    <div class="form-group">
        {!! Form::label ('direccion', 'Direccion del alumno',['class'=>'text-success miest']) !!}
        {!! Form::text ('direccion',null,['placeholder'=>'Ingresa la direccion del alumno', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_pais', 'Pais de residencia',['class'=>'text-success miest']) !!}
        {!! Form::select ('id_pais',$paises->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_entidad', 'Entidad de residencia',['class'=>'text-success miest']) !!}
        {!! Form::select ('id_entidad',$entidades->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('id_municipio', 'Municipios de residencia',['class'=>'text-success miest']) !!}
        {!! Form::select ('id_municipio',$municipios->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccionar', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('cp', 'Codigo postal',['class'=>'text-success miest']) !!}
        {!! Form::number ('cp',null,['placeholder'=>'Ingresa el codigo postal', 'class'=>'form-control']) !!}
    </div>
    <h6 class="text-success miest">Colonia: </h6>
    <div class="form-group">
        {!! Form::label ('observacion_direccion', 'Referencia de direccion',['class'=>'text-success miest']) !!}
        {!! Form::text ('observacion_direccion',null,['placeholder'=>'Ingresa una referencia del domicilio', 'class'=>'form-control']) !!}
    </div>
    <h4 align="center">Entre calles.</h4>
    <div class="form-group">
        {!! Form::label ('calle_1', 'Calle 1:',['class'=>'text-success miest']) !!}
        {!! Form::text ('calle_1',null,['placeholder'=>'Ingresa la calle 1', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label ('calle_2', 'Calle 2:',['class'=>'text-success miest']) !!}
        {!! Form::text ('calle_2',null,['placeholder'=>'Ingresa la calle 2', 'class'=>'form-control']) !!}
    </div>
    <h2 align="center">Datos del padre o tutor.</h2>
    <div class="form-group">
        {!! Form::submit ('Guardar alumno',['class'=>'btn btn-success btn-block']) !!}
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