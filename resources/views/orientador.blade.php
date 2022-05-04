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
		<div class="col-sm-3"></div>
		<div class="col-sm-6 ">
			<h1 class="text-success" align="center">Bienvenido: {!! $usuarioactual->nombres !!}</h1>
			<br />
		</div>
		<div class="col-sm-3"></div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="card">
				<h3 class="card-header text-success">Agregar estudiante.</h3>
				<div class="card-body">
			    <h5 class="card-title text-success">Descripcion:</h5>
			    <p class="card-text">Hacer click aqui para agregar un estudiante en sus grupos asignados (Revisar que no esten ya en la seccion de ver grupos).</p>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<br />
			    			<img src="{!! asset('estilo/images/iconos/agregarestudiante.png') !!}" width="150px" />
			    		</div>
			    	</div>
			    </div>
			    <br />
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<a href="agregarestudiante" class="btn btn-success">Ingresar</a>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card">
			  <h3 class="card-header text-success">Buscar estudiante.</h3>
			  <div class="card-body">
			    <h5 class="card-title text-success">Descripcion:</h5>
			    <p class="card-text">Hacer click aqui para buscar estudiante ya sea por su ID, nombre o grupo.</p>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<br />
			    			<img src="{!! asset('estilo/images/iconos/buscarestudiante.png') !!}" width="150px" />
			    		</div>
			    	</div>
			    </div>
			    <br />
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
							<br />
			    			<a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mymodal">Ingresar</a>
			    			<div class="modal" id="mymodal">
			    				<div class="modal-dialog">
			    					<div class="modal-content">
			    						<div class="modal-header bg-success">
			    							<h3 class="modal-title text-light">Seleccione una opcion de busqueda</h3>
			    						</div>
			    						<div class="modal-body">
			    							<form action="opcionesbusc" method="post">
			    								{{ csrf_field() }}
			    								<div class="form-group">
			    									<label class="form-label" for="opciones">Seleccione una opcion</label>
			    									<select class="form-control" id="opciones" name="opciones">
			    										<option value="1">Buscar por ID</option>
			    										<option value="2">Buscar por nombre</option>
			    										<option value="3">Buscar por matricula</option>
			    									</select>
			    								</div>
			    								<br />
			    								<button type="submit" class="btn btn-primary w-100">Aceptar</button>
			    							</form>
			    						</div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card">
			  <h3 class="card-header text-success">Ver grupos.</h3>
			  <div class="card-body">
			    <h5 class="card-title text-success">Descripcion:</h5>
			    <p class="card-text">Hacer click aqui para ver sus grupos acargo (Nota: solo se mostraran sus grupos, no el de otro orientador).</p>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<img src="{!! asset('estilo/images/iconos/vergrupos.png') !!}" width="150px" />
			    		</div>
			    	</div>
			    </div>
			    <br />
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
							<br />
			    			<a href="vergruposor" class="btn btn-success">Ingresar</a>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

	</div>
	<br />
	<div class="row">
		<div class="col-sm-4">
			<div class="card">
			  <h3 class="card-header text-success">Ver resultados de admision.</h3>
			  <div class="card-body">
			    <h5 class="card-title text-success">Descripcion:</h5>
			    <p class="card-text">Hacer click aqui para ver los resultados de admision de examen EXANI-I.</p>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<img src="{!! asset('estilo/images/iconos/resultadosadmin.png') !!}" width="150px" />
			    		</div>
			    	</div>
			    </div>
			    <br />
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<a href="verresultadosadmi" class="btn btn-success">Ingresar</a>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card">
			  <h3 class="card-header text-success">Ver reportes.</h3>
			  <div class="card-body">
			    <h5 class="card-title text-success">Descripcion:</h5>
			    <p class="card-text">Hacer click aqui paraver reportes por grupos (Hombres, mujeres, bajas).</p>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<img src="{!! asset('estilo/images/iconos/reportes.png') !!}" width="150px" />
			    		</div>
			    	</div>
			    </div>
			    <br />
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
							<br />
			    			<a href="genera_pdf" class="btn btn-success">Ingresar</a>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card">
			  <h3 class="card-header text-success">Editar informacion.</h3>
			  <div class="card-body">
			    <h5 class="card-title text-success">Descripcion:</h5>
			    <p class="card-text">Hacer click aqui para editar informacion de tu usuario.</p>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<img src="{!! asset('estilo/images/iconos/editarusuario.png') !!}" width="150px" />
			    		</div>
			    	</div>
			    </div>
			    <br />
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
							<br />
			    			<a href="editarinfou" class="btn btn-success">Ingresar</a>
			    		</div>
			    	</div>
			    </div>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-4">
		</div>

		<div class="col-sm-4">
			<div class="card">
				<h3 class="card-header text-success">Gestionar bajas.</h3>
				<div class="card-body">
			    <h5 class="card-title text-success">Descripcion:</h5>
			    <p class="card-text">Seleccione esta opcion para gestionar todas las bajas.</p>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
			    			<img src="{!! asset('estilo/images/iconos/minus.png') !!}" width="150px" />
			    		</div>
			    	</div>
			    </div>
			    <br />
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-2"></div>
			    		<div class="col-sm-4">
							<br />
			    			<a href="gestionbajas" class="btn btn-success">Ingresar</a>
			    		</div>
			    	</div>
			    </div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
		</div>
	</div>
	<br />
	<br />
</div>
@endsection()