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
			<h1>Detalles del tipo de usuario {!! $tipo_user->nombre !!}</h1>
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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{!! $tipo_user->id !!}</td>
                    <td>{!! $tipo_user->nombre !!}</td>
                    <td>
                    	@if ($tipo_user->status == 1)
                    		{{ "Activo" }}
                    	@endif
                    	@if ($tipo_user->status == 0)
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
			<a href="{!! asset('tipos_users') !!}" class="btn btn-success">Regresar</a>
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
