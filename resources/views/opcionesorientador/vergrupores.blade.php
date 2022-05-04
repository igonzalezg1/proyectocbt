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
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h2 class="text-success">Alumnos por grupo</h2>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table id="tabla1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
						<th>Apellidos</th>
                        <th>Nombre(s)</th>
                        <th>Folio del examen</th>
                        <th>Año del examen</th>
						<th>Puntaje total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumnos)
                    <tr>
                        <td>{!! $alumnos->ap_paterno !!} {!! $alumnos->ap_meterno !!}</td>
                        <td>{!! $alumnos->nombres !!}</td>
                        <td>{!! $alumnos->folio_examen !!}</td>
                        <td>{!! $alumnos->anio_examen !!}</td>
                        <td>{!! $alumnos->puntaje_total !!}</td>
                        <td><a href="{!! asset('verresultadoxalu/'.$alumnos->folio_examen) !!}" class="btn btn-primary"><i class="bi bi-eye"></i> Ver mas</a></td>
                    </tr>
                        @endforeach
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