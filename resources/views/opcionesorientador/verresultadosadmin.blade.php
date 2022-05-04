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
            <h2 class="text-success" align="center">Hola {!! $usuarioactual->nombres !!}</h2>
            <h5 align="center">Selecciona el grupo que quieres ver sus resultados de admision</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-8">
            <div class="btn-group-vertical w-100">
                @foreach ($grupos as $grupo)
                    <a href="{!! 'vergruposelecadmin/'.$grupo->id !!}" class="btn btn-outline-primary w-100 btn-lg">{!! $grupo->nombre !!}</a>
                @endforeach
            </div>
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
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
@endsection()