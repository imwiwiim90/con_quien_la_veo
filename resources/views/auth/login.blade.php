<html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('imgs/logo_transparente.png') }}" />
      <meta charset="utf-8">
        <title>¿Con quién la veo?</title>
    </head>
    <body style="background-image:url({{ URL::asset('imgs/fondo.jpg') }})">


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
            <img src="{{ URL::asset('imgs/logo_transparente.png') }}" WIDTH=50 >
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

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">

              <center>
              <img src="{{ URL::asset('imgs/logo_banner_t_p.png') }}" class="img-responsive">
            </center><br><br>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo institucional</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar Sesión
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>



    </body>

    </html>
