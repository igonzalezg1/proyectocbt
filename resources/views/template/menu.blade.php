  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        <a href="{!! asset('inicio') !!}" class="text-success clase1"><img src="{!! asset('estilo/assets/img/iconoesc.png') !!}" width="50px"> CBT. Dr. Ezequiel Capistran Rodriguez</a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="navbar" class="navbar">
        @auth
          <ul>
            <li><a class="nav-link scrollto active" href="#">INICIO DE PAGINA</a></li>
            <li><a class="nav-link scrollto" href="registrars">CREAR USUARIO</a></li>
            <li class="dropdown"><a href="#" class="clase1"><span>OPCIONES DE USUARIO</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{!! asset('indexo') !!}" class="clase1">OPCIONES DE ORIENTADORES</a></li>
                <li><a href="{!! asset('admin') !!}" class="clase1">OPCIONES DE ADMINISTRADOR</a></li>
                <li><a href="{!! asset('secretaria') !!}" class="clase1">OPCIONES DE SECRETARIAS</a></li>
              </ul>
            </li>
            <li><a href="{!! asset('cerrar') !!}" class="btn-get-started clase1">CERRAR SESION</a></li>
          </ul>
        @else
          <ul>
              <li><a class="nav-link scrollto active" href="#">INICIO DE PAGINA</a></li>
              </li>
              <li><a href="{!! asset('login') !!}" class="btn-get-started clase1">INICIAR SESION</a></li>
            </ul>
        @endauth
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->