<html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <meta charset="utf-8">
        <title>¿Con quién la veo?</title>
    </head>
    <body>




      @extends('layouts.header')




      @section('header')
      @if (!Auth::guest())
          @parent
      @endif
      @endsection

      @section('content')

      @if (!Auth::guest())

      <center>
      <h2><b>Actividad reciente</b><h2>
      </center>

      <div class="jumbotron">

      </div>

      <div class="jumbotron">

      </div>

      <div class="jumbotron">

      </div>

      @else

      <div class="bs-component "  >
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <nav class="navbar navbar-default navbar-fixed-top " >
        <div class="container-fluid" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="imgs/logo_transparente.png" WIDTH=50 >
          </div>
          <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login">Iniciar Sesión</a></li>
              <li><a href="register">Registro</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>


      <br><br><br><br><br><br>
      <div class="jumbotron">
        <center>
        <img src="imgs/logo_banner_t_p_slogan.png" class="img-responsive">
      </center>


      <div class="container">
         <div class="row">
            <div class="col-xs-6">
                <br>
                <h3 style="text-align: justify; font-size: calc(100% + 0.95vw);" >Bienvenido al sistema de consulta, calificación y recomendación de profesores, monitores y asignaturas para tu universidad.</h2>

            </div>
            <div class="col-xs-6">
                <br> <br>
                <p><a href="login" class="btn btn-primary btn-lg btn-block">Iniciar sesión</a></p>
                <p><a a href="register" class="btn btn-primary btn-lg btn-block">Registro</a></p>
            </div>
          </div>
      </div>



      </div>



      @endif

      @endsection



    </body>

    </html>
