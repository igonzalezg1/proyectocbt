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
                <h1 align="center" class="text-success"">Seleccionar por que se dara de baja</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="nombre" class="text-success miest">Nombre del alumno</label>
                <input type="text" name="nombre" id="nombre" class="form-control" readonly="true" value="{!! $alumno->ap_paterno !!} {!! $alumno->ap_meterno !!} {!! $alumno->nombres !!}"/>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                {!! Form::open(['url'=>'/crearlabaja', 'class'=>'form-inline']) !!}
                    <label for="id_alumno" class="text-success miest">ID del alumno</label>
                    <input type="text" name="id_alumno" id="id_alumno" class="form-control" readonly="true" value="{!! $alumno->id !!}"/>
                    <label for="tipo_baja" class="text-success miest">Motivo de la baja</label>
                    <select class="form-select" name="tipo_baja" id="tipo_baja">
                        <option value="Embarazo/Matrimonio">Embarazo o matrimonio</option>
                        <option value="Adicciones">Adicciones</option>
                        <option value="Violencia">Violencia</option>
                        <option value="Academico">Problemas academicos</option>
                        <option value="Otro">Otros</option>
                      </select>
                      <br />
                      <button type="submit" class="btn btn-danger w-100">Confirmar baja</button>
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
@endsection()