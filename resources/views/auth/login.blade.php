@extends('template.master')
@section('contenido_central')
<div class="container-fluid">
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-3">
            <img src="estilo/images/login.png" width="250px" />
        </div>
        <div class="col-sm-4"></div>
    </div>
    <h1 align="center" class="text-success">&nbsp; &nbsp; &nbsp; &nbsp;Iniciar sesion</h1>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="login" method="post" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" id="username"
                            placeholder="Ingrese el username" data-rule="minlen:4" 
                            data-msg="Capturar mas de 4 caracteres">
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Ingrese la contraseña">
                    </div>
                </div>
                <br />
                <div class="form-group">
                   <button type="submit" class="btn btn-success w-100">Ingresar</button>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</div>
@endsection()