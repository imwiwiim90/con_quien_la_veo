<html>
    <head>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('imgs/logo_transparente.png') }}" />
      <meta charset="utf-8">
        <title>¿Con quién la veo?</title>
    </head>
    <body style="background-image:url({{ URL::asset('imgs/fondo.jpg') }})">
        @section('header')
        <div class="container" >
        <div class="bs-docs-section clearfix" >
        <div class="row" >
        <div class="col-lg-12" >
          <div class="bs-component "  >
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

            <center>
            <img src="{{ URL::asset('imgs/logo_banner_t_p.png') }}" WIDTH=300 style="margin:15px"   >
          </center>

          <nav class="navbar navbar-default " >
            <div class="container-fluid" >
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <img src="{{ URL::asset('imgs/logo_transparente.png') }}" WIDTH=50 >
              </div>
              <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false">
                <ul class="nav navbar-nav">
                  @if (!Auth::guest())
                  <li><a href="/miperfil">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a></li>
                  @endif
                  <li><a href="/" >Inicio</a></li>
                  <li><a href="/asignaturas" >Lista de asignaturas</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search" >
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar profesor, asignatura o monitor."  style="width: 300px" name="search">
                  </div>
                  <button type="submit" class="btn btn-default" value="Buscar" >Buscar</button>
                </form>


                        @if (Input::has('search'))

                        <?php
                        $name = Input::get('search');
                        header("Location: /buscar/$name");
                        die();
                        ?>
                        @endif


                <ul class="nav navbar-nav navbar-right">
                  <li><a href="/logout">Cerrar Sesión</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        </div>
      </div>
      </div>
      </div>
        @show

        <div class="container">
          <div class="row" >
          <div class="col-lg-12" >
            @yield('content')
            </div>
            </div>
        </div>
    </body>
</html>
