@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-success" align="center">Selecciona el reporte que quieres generar</h1>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-success" align="center">Reporte de grupos</h5>
                </div>
                <div class="card-body">
                    <div align="center"><img src="{!! asset('estilo/images/iconos/grupos.png') !!}" width="200px" alt=""></div>
                    <h6 align="center">Descripcion:</h6>
                    <p>Seleccione esta opcion para generar PDF de los grupos asignados</p>
                </div> 
                <div class="card-footer">
                    <a href="genera_pdf_grupos" class="btn btn-success w-100">Acceder a apartado</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-success" align="center">Reporte de bajas</h5>
                </div>
                <div class="card-body">
                    <div align="center"><img src="{!! asset('estilo/images/iconos/minus.png') !!}" width="200px" alt=""></div>
                    <h6 align="center">Descripcion:</h6>
                    <p>Seleccione esta opcion para generar PDF de los grupos asignados</p>
                </div> 
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="crear_reporte_bajas/1" class="btn btn-success w-100">Ver PDF</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="crear_reporte_bajas/2" class="btn btn-primary w-100">Descargar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-success" align="center">Reporte de examen de admision</h5>
                </div>
                <div class="card-body">
                    <div align="center"><img src="{!! asset('estilo/images/iconos/resultadosadmin.png') !!}" width="200px" alt=""></div>
                    <h6 align="center">Descripcion:</h6>
                    <p>Seleccione esta opcion para generar PDF de los resultados de admision</p>
                </div> 
                <div class="card-footer">
                    <a href="genera_pdf_resultados" class="btn btn-success w-100">Acceder a apartado</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />
@endsection()