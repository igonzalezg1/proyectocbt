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
			<h1>Detalles de {!! $carrera->nombre !!}</h1>
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
                        <th>Clave</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{!! $carrera->id !!}</td>
                    <td>{!! $carrera->nombre !!}</td>
                    <td>{!! $carrera->clave !!}</td>
                    <td>
                    	@if ($carrera->status == 1)
                    		{{ "Activo" }}
                    	@endif
                    	@if ($carrera->status == 0)
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
			<a href="{!! asset('carreras') !!}" class="btn btn-success">Regresar</a>
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
