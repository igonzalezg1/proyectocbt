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
            <h2 align="center" class="text-success">RESULTADOS DE EXANII-I DEL ALUMNO {!! $resultados->alumnos->nombres !!}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
						<th>Apellidos</th>
                        <th>Nombre(s)</th>
                        <th>Folio del examen</th>
                        <th>Año del examen</th>
						<th>Puntaje total</th>
                    </tr>
                </thead>
                <tbody>
                    <td>{!! $resultados->alumnos->ap_paterno !!} {!! $resultados->alumnos->ap_meterno !!}</td>
                    <td>{!! $resultados->alumnos->nombres !!}</td>
                    <td>{!! $resultados->folio_examen !!}</td>
                    <td>{!! $resultados->anio_examen !!}</td>
                    <td>{!! $resultados->puntaje_total !!}</td>
                </tbody>
            </table>
            <br />
            <h4 class="text-success" align="center">Resultados individuales</h4>
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
						<th>Puntaje Matematico</th>
                        <th>Puntaje Analitico</th>
                        <th>Puntaje español</th>
                        <th>Puntaje Biologia</th>
						<th>Puntaje Fisica</th>
                        <th>Puntaje Historia</th>
                        <th>Puntaje Ingles</th>
                    </tr>
                </thead>
                <tbody>
                    <td>{!! $resultados->puntaje_matematico !!}</td>
                    <td>{!! $resultados->puntaje_analitico !!}</td>
                    <td>{!! $resultados->puntaje_espaniol !!}</td>
                    <td>{!! $resultados->puntaje_biologia !!}</td>
                    <td>{!! $resultados->puntaje_fisica !!}</td>
                    <td>{!! $resultados->puntaje_historia !!}</td>
                    <td>{!! $resultados->puntaje_ingles !!}</td>
                </tbody>
            </table>
            <br />
        </div>
    </div>
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
@endsection()