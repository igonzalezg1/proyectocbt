@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container">	
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h1>Detalles del grupo del profesor: {!! $grupo_x_profesor->profesores->nombres !!}</h1>
		</div>
		<div class="col-sm-2"></div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Grupo</th>
                        <th>Profesor</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{!! $grupo_x_profesor->id !!}</td>
                    <td>{!! $grupo_x_profesor->grupos->nombre !!}</td>
                    <td>{!! $grupo_x_profesor->profesores->nombres !!}</td>
                    <td>
                    	@if ($grupo_x_profesor->status == 1)
                    		{{ "Activo" }}
                    	@endif
                    	@if ($grupo_x_profesor->status == 0)
                    		{{"Inactivo"}}
                    	@endif
                   	</td>
                </tr>
                </tbody>
            </table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<a href="{!! asset('grupos_x_profesoress') !!}" class="btn btn-success w-100">Regresar</a>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
@endsection()
