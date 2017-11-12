<html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('imgs/logo_transparente.png') }}" />
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



      <div class="jumbotron">

        @if(count($calificaciones)==0)
        <h2 style="text-align:justify">En esta sección podrás encontrar los últimos
           comentarios sobre asignaturas de tu interés. Suscribete a alguna
            asignatura para empezar a ver contenido.<h2>
        <center><p><a class="btn btn-primary btn-lg" href="/asignaturas">Lista de asignaturas</a></p></center>
        @else
        <center>
        <h2><b>Actividad reciente</b><h2>
        </center>

        <script type= "text/javascript" src="{{ URL::asset('js/tab_divider.js') }}"></script>
           <table class="table" ><tbody id="coments">

           <?php
          $contador=0;
           foreach ($calificaciones as $c) {
             if ($c->comentario!=null and $c->comentario!="" and $c->comentario!=" "){
               $contador=$contador+1;
             }
           }
         foreach ($calificaciones as $c) {
         $nombre_usuario= \App\User::where('id', '=', $c->id_usuario)->get();
         $nombre_materia= \App\Materia::where('id', '=', $c->id_calificado)->get();

        if ($c->comentario!=null and $c->comentario!="" and $c->comentario!=" "){

         echo '<tr><td><div class="card text-black bg-ligh " style="border-radius: 15px; border-style: solid;
         border-width: 5px; border-color: #2c3e50;"><div class="card-body">
         <blockquote class="card-blockquote">',$nombre_usuario[0]->name,'  >
         <a href="/asignatura/',$nombre_materia[0]->id,'">',
         $nombre_materia[0]->nombre,'</a><br><br><p>',$c->comentario,'</p>
         <footer style="color:black;"><i>',$c->updated_at->format("d-m-Y"),
         '</i> &nbsp&nbsp&nbsp<img src=',URL::asset("imgs/up.png"),' WIDTH=25>',
         $c->valoracion,'<a  class="btn btn-primary" style="float:right; padding:5px" href="/like_i/',$c->id,'/',Auth::id() ,'"><h4>';

         $x= \App\Megusta::where('id_comentario', '=', $c->id)->where('id_usuario', '=', Auth::id())->get();

         if(count($x)==0){

         echo'Me gusta</h4></a></blockquote</footer></div></div></td></tr>';
        }

         else{
           echo'Ya no me gusta</h4></a></blockquote</footer></div></div></td></tr>';
         }

         }

         }

           ?>

         </tbody></table>


                @if ($contador>5)
               <div class="col-md-12 text-center" >
                 <ul class="pagination pagination-sm" id="myPager"></ul>
               </div>
               @endif

               <script>$('#coments').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:5});</script>


        @endif



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
