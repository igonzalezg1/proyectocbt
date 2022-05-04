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
                <h1 align="center" class="text-sucess">Lista de baja de alumnos</h1>
                <table id="tabla1" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre completo</th>
                            <th>Matricula</th>
                            <th>semestre Maximo</th>
                            <th>generacion</th>
                            <th>Motivo de baja</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bajas as $baja)
                    <tr>
                        <td>{!! $baja->alumnos->id !!}</td>
                        <td>{!! $baja->alumnos->ap_paterno !!} {!! $baja->alumnos->ap_meterno !!} {!! $baja->alumnos->nombres !!}</td>
                        <td>{!! $baja->alumnos->matricula !!}</td>
                        <td>{!! $baja->alumnos->semestre !!}</td>
                        <td>{!! $baja->alumnos->generaciones->nombre !!}</td>
                        <td>{!! $baja->tipo_baja !!}</td>
                        <td align="center">
                        <a href="{!! 'verestselec/'.$baja->alumnos->id !!}" class="btn btn-primary">
                            Ver info
                        </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
@endsection()