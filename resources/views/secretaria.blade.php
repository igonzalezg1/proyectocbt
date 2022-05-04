@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-success" align="center">Bienvenido: secretaria</h1>
            <h3 class="text-success" align="center">Seleccione una de las opciones disponibles</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-success" align="center">Crear una nueva generacion</h5>
                </div>
                <div class="card-body">
                    <div align="center"><img src="{!! asset('estilo/images/iconos/generacionesc.png') !!}" width="200px" alt=""></div>
                    <h6 align="center">Descripcion:</h6>
                    <p>Seleccione esta opcion para gestionar las generaciones que existen</p>
                </div> 
                <div class="card-footer">
                    <a href="generacioness" class="btn btn-success w-100">Acceder a apartado</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-success" align="center">Actualizar grupos</h5>
                </div>
                <div class="card-body">
                    <div align="center"><img src="{!! asset('estilo/images/iconos/actualizargxp.png') !!}" width="200px" alt=""></div>
                    <h6 align="center">Descripcion:</h6>
                    <p>Seleccione esta opcion para gestionar los grupos por cada orientador</p>
                </div> 
                <div class="card-footer">
                    <a href="grupos_x_profesoress" class="btn btn-success w-100">Acceder a apartado</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-success" align="center">Subir de semestre</h5>
                </div>
                <div class="card-body">
                    <div align="center"><img src="{!! asset('estilo/images/iconos/subirsem.png') !!}" width="200px" alt=""></div>
                    <h6 align="center">Descripcion:</h6>
                    <p>Seleccione esta opcion para subir de semestre a todos los alumnos activos</p>
                </div> 
                <div class="card-footer">
                    <a href="#" class="btn btn-success w-100" id="btnDelete">Acceder a apartado</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />
@endsection()