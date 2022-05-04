<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CBT. Dr. Ezequiel Capistran Rodriguez</title>
    <link rel="stylesheet" href="{!! asset('estilo/css/bootstrap.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('estilo/css/fontawesome.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('estilo/css/magnific-pupup.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('estilo/css/mio.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('estilo/css/styles.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('estilo/css/swiper.css') !!}" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div align="center"><img src="{!! asset('estilo/images/iconoesc.png') !!}" alt="" width="50px"></div>
                <br />
                <br />
                <br />
                <p> CBT DR EZEQUIEL CAPISTRAN RODRIGUEZ</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-success" align="center">Reporte del resultados del grupo {!! $grupo->nombre !!}</h1>
            </div>
            <div class="col-sm-4">
                <h5>Fecha: {!! $date !!}</h5>
            </div>
        </div>
    </div>
            <div class="col-sm-12">

                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Total</th>
                            <th>Matematicas</th>
                            <th>P. Analitico</th>
                            <th>Español</th>
                            <th>Biologia</th>
                            <th>Fisica</th>
                            <th>Historia</th>
                            <th>Ingles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                        <tr>
                            <td>{!! $datas->alumnos->ap_paterno !!} {!! $datas->alumnos->ap_meterno !!} {!! $datas->alumnos->nombres !!}</td>
                            <td>{!! $datas->puntaje_total !!}</td>
                            <td>{!! $datas->puntaje_matematico !!}</td>
                            <td>{!! $datas->puntaje_analitico !!}</td>
                            <td>{!! $datas->puntaje_espaniol !!}</td>
                            <td>{!! $datas->puntaje_biologia !!}</td>
                            <td>{!! $datas->puntaje_fisica !!}</td>
                            <td>{!! $datas->puntaje_historia !!}</td>
                            <td>{!! $datas->puntaje_ingles !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</body>
</html>