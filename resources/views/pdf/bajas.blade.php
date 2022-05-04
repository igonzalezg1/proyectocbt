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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div align="center"><img src="{!! asset('estilo/images/iconoesc.png') !!}" alt="" width="150px"></div>
                <br />
                <br />
                <br />
                <p> CBT DR EZEQUIEL CAPISTRAN RODRIGUEZ</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-success" align="center">Reporte de Bajas</h1>
            </div>
            <div class="col-sm-4">
                <h5>Fecha: {!! $date !!}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Total de bajas</th>
                            <th>Bajas por adicciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{!! $bajast !!}</td>
                        <td>{!! $bajasa !!}</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Bajas por violencia</th>
                            <th>Bajas de tipo academicas</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{!! $bajasv !!}</td>
                        <td>{!! $bajasac !!}</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Otro tipo de baja</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{!! $bajaso !!}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>