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
			<h1>Detalles de {!! $user->nombres !!}</h1>
		</div>
		<div class="col-sm-2"></div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ap_paterno</th>
                        <th>ap_materno</th>
                        <th>nombres</th>
                        <th>Tipo de usuario</th>
                        <th>correo</th>
                        <th>username</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{!! $user->id !!}</td>
                    <td>{!! $user->ap_paterno !!}</td>
                    <td>{!! $user->ap_meterno !!}</td>
                    <td>{!! $user->nombres !!}</td>
                    <td>{!! $user->tipos_users->nombre !!}</td>
                    <td>{!! $user->correo !!}</td>
                    <td>{!! $user->username !!}</td>
                    <td>{!! $user->status !!}</td>
                </tr>
                </tbody>
            </table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<a href="{!! asset('users') !!}" class="btn btn-success">Regresar</a>
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