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
			<h1>Detalles de generacion {!! $generacion->nombre !!}</h1>
		</div>
		<div class="col-sm-2"></div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Año inicio</th>
                        <th>Año fin</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{!! $generacion->id !!}</td>
                    <td>{!! $generacion->nombre !!}</td>
                    <td>{!! $generacion->anio_inicio !!}</td>
                    <td>{!! $generacion->anio_fin !!}</td>
                    <td>
                    	@if ($generacion->status == 1)
                    		{{ "Activo" }}
                    	@endif
                    	@if ($generacion->status == 0)
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
			<a href="{!! asset('generacioness') !!}" class="btn btn-primary w-100">Regresar</a>
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
