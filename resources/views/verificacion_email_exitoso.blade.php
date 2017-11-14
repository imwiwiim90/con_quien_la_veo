<html>
    <head>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('imgs/logo_transparente.png') }}" />
      <meta charset="utf-8">
        <title>¿Con quién la veo?</title>
    </head>
    <body>
      <div class="bs-component "  >
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      </div>


      <br><br><br><br>
      <div class="jumbotron">
        <center>
        <img src="{{ URL::asset('imgs/logo_banner_t_p_slogan.png') }}" class="img-responsive">
      </center>


      <div class="container">
         <div class="row">
            <div class="col-xs-6">
                <br>
                <h3 style="text-align: justify; font-size: calc(100% + 0.95vw);" >¡Felicitaciones! Ahora tienes acceso a nuestra aplicación. Ahora solo debes iniciar sesión para poder ingresar</h2>

            </div>
            <div class="col-xs-6">
                <br> <br>
                <p><a href="/login" class="btn btn-primary btn-lg btn-block">Iniciar sesión</a></p>
            </div>
          </div>
      </div>



      </div>

    </body>

</html>
