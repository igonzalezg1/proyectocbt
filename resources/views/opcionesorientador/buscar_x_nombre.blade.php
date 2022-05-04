@extends('template.master')
@section('contenido_central')
<script>
	function buscar_nombre(nombre_alumno_b)
	{
		$("#DataResult").empty();
		var asset = '{!! asset('') !!}';
		var ruta = asset+'buscar_x_nombre/'+nombre_alumno_b;

		$.ajax({
			type:'GET',
			url: ruta,
			success:function(data)
			{
				var html = '';
				var alumnos = data;
				for(var i = 0; i< alumnos.length; i++)
				{
					if(alumnos[i].id_grupo == 1)
					{
						var ngrupo = '1° "1"';
					}else if(alumnos[i].id_grupo == 2)
					{
						var ngrupo = '1° "2"';
					}else if(alumnos[i].id_grupo == 3)
					{
						var ngrupo = '1° "3"';
					}else if(alumnos[i].id_grupo == 4)
					{
						var ngrupo = '1° "4"';
					}else if(alumnos[i].id_grupo == 5)
					{
						var ngrupo = '2° "1"';
					}else if(alumnos[i].id_grupo == 6)
					{
						var ngrupo = '2° "2"';
					}else if(alumnos[i].id_grupo == 7)
					{
						var ngrupo = '2° "3"';
					}else if(alumnos[i].id_grupo == 8)
					{
						var ngrupo = '2° "4"';
					}else if(alumnos[i].id_grupo == 9)
					{
						var ngrupo = '3° "1"';
					}else if(alumnos[i].id_grupo == 10)
					{
						var ngrupo = '3° "2"';
					}else if(alumnos[i].id_grupo == 11)
					{
						var ngrupo = '3° "3"';
					}else if(alumnos[i].id_grupo == 12)
					{
						var ngrupo = '3° "4"';
					}
					var asset = '{!! asset('') !!}';
					var rutase = asset+'verestselec/'+alumnos[i].id;
					html += '<tr>'+
								'<td>'+alumnos[i].ap_paterno +' ' + alumnos[i].ap_meterno + '</td>'+
								'<td>'+alumnos[i].nombres+'</td>'+
								'<td>'+alumnos[i].id_carrera+'</td>'+
								'<td>'+ngrupo+'</td>'+
								'<td>'+alumnos[i].semestre+'</td>'+
								'<td>'+alumnos[i].matricula+'</td>'+
								'<td><a href = "'+rutase+'" class="btn btn-primary btn-xs"><span  class="bi bi-info-circle"></span> Ver</a></td>'+
							'</tr>';
				}
				$('#DataResult').html(html);
			}
		});
	}
</script>
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
			<h2 align="center" class="text-success">Buscar alumno por nombre</h2>
		</div>
		<div class="col-sm-2"></div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="form-inline">
				<label for="nombre_alumno_b" class="text-success miest sr-only">Ingresa un nombre (entre mas especifico, mejor resultado)</label>
				<div class="input-group">
					<br />
					<input type="text" name="nombre_alumno_b" id="nombre_alumno_b" class="form-control mb-2 mr-sm-2" placeholder="Ingresa el nombre a buscar" onkeyup='javascript:this.value = this.value.toUpperCase();'>
					<a class="btn btn-primary mb-2" onclick="buscar_nombre(nombre_alumno_b.value);"><i class="bi bi-search"></i></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
<br />
<br />
<div class="container">
	<div class="row">
		<div class="col-sm-12">
            <table id="tabla1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
						<th>Apellidos</th>
                        <th>Nombre(s)</th>
                        <th>ID de carrera</th>
                        <th>Grupo</th>
						<th>Semestre</th>
						<th>Matricula</th>
						<th>Ver info</th>
                    </tr>
                </thead>
                <tbody id="DataResult">
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