@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<div class="row">
    <div class="col-sm-12">
        <h2 class="text-success" align="center">Hola</h2>
        <h5 align="center">Selecciona el grupo deseado</h5>
    </div>
</div>
<div class="row">
    <div class="col-sm-2"> </div>
    <div class="col-sm-8">
        <table class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Grupo</th>
                    <th>Generar</th>
                    <th>Descargar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grupos as $grupo)
                <tr>
                    <td>{!! $grupo->nombre !!}</td>
                    <td><a href={!! 'crear_reporte_grupo/1/'.$grupo->id !!} class="btn btn-success">Ver reporte</a></td>
                    <td><a href={!! 'crear_reporte_grupo/2/'.$grupo->id !!} class="btn btn-danger">Descargar reporte</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-2"></div>
</div>
<br />
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <a href="{!! asset('indexo') !!}" class="btn btn-primary w-100">Regresar a opciones de orientador</a>
    </div>
    <div class="col-sm-2"></div>
</div>
<br />
<br />
@endsection()