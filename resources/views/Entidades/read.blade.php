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
			<h1>Detalles de {!! $entidad->nombre !!}</h1>
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
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{!! $entidad->id !!}</td>
                    <td>{!! $entidad->nombre !!}</td>
                    <td>{!! $entidad->paises->nombre !!}</td>
                </tr>
                </tbody>
            </table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<a href="{!! asset('entidades') !!}" class="btn btn-success">Regresar</a>
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