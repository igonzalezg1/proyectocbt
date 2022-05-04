@extends('template.master')
@section('contenido_central')
<br />
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 align="center">Opciones de administrador</h1>
        </div>
    </div>
    <br />
        <div class="row">
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/flag.png') !!}" alt="img" width="100px">
              <h4>Paises</h4>
              <p>Dar click para acceder a tabla de Paises.</p>
              <a href="paises" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/usa.png') !!}" alt="img" width="100px">
              <h4>Entidades</h4>
              <p>Dar click para acceder a tabla de Entidades.</p>
              <a href="entidades" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/buildings.png') !!}" alt="img" width="100px">
              <h4>Municipios</h4>
              <p>Dar click para acceder a tabla de Municipios.</p>
              <a href="municipios" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
        </div>

        <br />
        <br />
        <div class="row">
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/grupos_x_profesores.png') !!}" alt="img" width="100px">
              <h4>Grupos por Profesores</h4>
              <p>Dar click para acceder a tabla de Grupos por Profesores.</p>
              <a href="grupos_x_profesores" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/nacionalidades.png') !!}" alt="img" width="100px">
              <h4>Nacionalidades</h4>
              <p>Dar click para acceder a tabla de Nacionalidades.</p>
              <br />
              <a href="nacionalidades" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/carreras.png') !!}" alt="img" width="100px">
              <h4>Carreras</h4>
              <p>Dar click para acceder a tabla de Carreras.</p>
              <br />
              <a href="carreras" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
        </div>



        <br />
        <br />
        <div class="row">
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/generaciones.png') !!}" alt="img" width="100px">
              <h4>Generaciones</h4>
              <p>Dar click para acceder a tabla de Generaciones.</p>
              <a href="generaciones" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/tipos_users.png') !!}" alt="img" width="100px">
              <h4>Tipos de Usuarios</h4>
              <p>Dar click para acceder a tabla de Tipos de Usuarios.</p>
              <a href="tipos_users" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/user.png') !!}" alt="img" width="100px">
              <h4>Usuarios</h4>
              <p>Dar click para acceder a tabla de Usuarios.</p>
              <a href="users" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
        </div>



        <br />
        <br />
        <div class="row">
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/grupos.png') !!}" alt="img" width="100px">
              <h4>Grupos</h4>
              <p>Dar click para acceder a tabla de Grupos.</p>
              <br />
              <a href="grupos" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/alumnos.png') !!}" alt="img" width="100px">
              <h4>Alumnos</h4>
              <p>Dar click para acceder a tabla de Alumnos.</p>
              <br />
              <a href="alumnos" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
          <div class="col-md-4 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-block">
              <img src="{!! asset('estilo/images/iconos/resultados_admision.png') !!}" alt="img" width="100px">
              <h4>Resultados de Admisión</h4>
              <p>Dar click para acceder a tabla de Resultados de Admisión.</p>
              <a href="resultados_admision" class="btn btn-success btn-block">Acceder a tabla</a>
            </div>
          </div>
        </div>
      </div>
      <br />
@endsection()