@extends('layouts.header')

@section('header')
@if (!Auth::guest())
    @parent
@endif
@endsection

@section('content')

@if (!Auth::guest())

<div class="jumbotron">


  @if (count($profesor)==0)
  <?php
  header("Location: /");
  die();
  ?>
  @endif

  <?php
  foreach ($profesor as $p) {
  echo "<center><b style='font-size:48;'>",$p->nombre,"</b><h3>Dictada por el Departamento de ",$p->departamento,"</h3></center><br>";
  }
  ?>

  <div class="row">

      <div class="col-lg-4">
        <div class="bs-component">

          <h3>Calificación general</h3>
          <table>
        <tbody >

        <tr>

        @if ($c1<0.4)
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=0.4&&$c1<0.9)
        <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=0.9&&$c1<1.4)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=1.4&&$c1<1.9)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=1.9&&$c1<2.4)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=2.4&&$c1<2.9)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=2.9&&$c1<3.4)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=3.4&&$c1<3.9)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=3.9&&$c1<4.4)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=4.4&&$c1<4.9)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
        @elseif ($c1>=4.9)
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
        @endif

        <td>&nbsp</td>
        <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{round($c1, 1, PHP_ROUND_HALF_UP)}}/5</h3></td>
        </tr>

        </tbody>
           </table>

           <h3>Nivel de complejidad </h3>
           @if ($c2>=4)<h2 style="color:#c0392b;"><b>{{$c2}}/5</b>&nbsp&nbspMuy Compleja</h2>
           @elseif ($c2>=3&&$c2<4)<h2 style="color:#e74c3c;"><b>{{$c2}}/5</b>&nbsp&nbspCompleja</h2>
           @elseif ($c2>=2&&$c2<3)<h2 style="color:#d35400;"><b>{{$c2}}/5</b>&nbsp&nbspRegular</h2>
           @elseif ($c2>=1&&$c2<2)<h2 style="color:#27ae60;"><b>{{$c2}}/5</b>&nbsp&nbspSencilla</h2>
           @elseif ($c2>=0&&$c2<1)<h2 style="color:#2ecc71;"><b>{{$c2}}/5</b>&nbsp&nbspMuy Sencilla</h2>
           @endif

           <h3>Nivel de exigencia </h3>
           @if ($c4>=4)<h2 style="color:#c0392b;"><b>{{$c4}}/5</b>&nbsp&nbspMuy Exigente</h2>
           @elseif ($c4>=3&&$c4<4)<h2 style="color:#e74c3c;"><b>{{$c4}}/5</b>&nbsp&nbspExigente</h2>
           @elseif ($c4>=2&&$c4<3)<h2 style="color:#d35400;"><b>{{$c4}}/5</b>&nbsp&nbspRegular</h2>
           @elseif ($c4>=0&&$c4<2)<h2 style="color:#27ae60;"><b>{{$c4}}/5</b>&nbsp&nbspPoco exigente</h2>
           @endif

           <h3>Nota promedio</h3>
           @if ($c3>=4)<h2 style="color:#27ae60;"><b>{{$c3}}/5</b>&nbsp&nbspMuy Alta</h2>
           @elseif ($c3>=4&&$c3<4)<h2 style="color:#d35400;"><b>{{$c3}}/5</b>&nbsp&nbspAlta</h2>
           @elseif ($c3>=2&&$c3<3)<h2 style="color:#e74c3c;"><b>{{$c3}}/5</b>&nbsp&nbspBaja</h2>
           @elseif ($c3>=0&&$c3<2)<h2 style="color:#c0392b;"><b>{{$c3}}/5</b>&nbsp&nbspMuy baja</h2>
           @endif

        </div>
      </div>

      <div class="col-lg-4">
        <div class="bs-component">

<center><h2>Profesores</h2></center>
<ul>
<?php foreach ($lista_profesores as $l) {
  echo '<li><a href="/docente/',$l->id,'" ><h3>',$l->nombre,'</h3></a></li>';
}  ?></ul>

<center><h2>Profesor recomendado</h2></center>
<center><a href="/docente/{{$recomendado->id}}"><h2>{{$recomendado->nombre}}</h2></a></center>

      </div>
    </div>

      <div class="col-lg-4">
        <div class="bs-component">

<center><h2>Monitores</h2></center>

@if(count($lista_monitores)==0)
<h3>No hay monitores registrados para esta asignatura</h3>
@endif
<ul>
<?php foreach ($lista_monitores as $l) {
  echo '<li><a href="/monitor/',$l->id,'" ><h3>',$l->nombre,'</h3></a></li>';
}  ?></ul>

        </div>
      </div>

      </div>

      <div class="row">

          <div class="col-lg-4">
            <div class="bs-component">


           </div></div>
           <div class="col-lg-4">
             <div class="bs-component">

            </div></div>
            <div class="col-lg-4">
              <div class="bs-component">
                <a href="/calificar_asignatura/{{ Request::route('id') }}" class="btn btn-primary btn-block" ><?php if(count($calif)==0){echo "Calificar";}else{echo "Actualizar Calificación";} ?></a>
                <a href="/subscribe/{{Request::route('id')}}/{{Auth::id()}}" class="btn btn-primary btn-block" ><?php if(count($subs)==0){echo "Suscribirme";}else{echo "Cancelar suscripción";} ?></a>
             </div></div>

           </div>

      @if(count($calificaciones)==0)
        <br><center><h3>No se han registrado calificaciones</h3></center>
      @else
        <br><center><h3>Comentarios</h3></center><br>
      @endif

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

   if ($c->comentario!=null and $c->comentario!="" and $c->comentario!=" "){

    echo '<tr><td><div class="card text-black bg-ligh " style="border-radius: 15px; border-style: solid;
       border-width: 5px; border-color: #2c3e50;"><div class="card-body">
    <blockquote class="card-blockquote"><p>',$c->comentario,'</p>
    <footer style="color:black;"><i>',$nombre_usuario[0]->name,' -  ',$c->updated_at->format("d-m-Y"),
    '</i> &nbsp&nbsp&nbsp<img src=',URL::asset("imgs/up.png"),' WIDTH=25>',
    $c->valoracion,'<a  class="btn btn-primary" style="float:right; padding:5px" href="/like_a/',$c->id,'/',Auth::id() ,'"><h4>';

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



   </div>


</div>

@else

<?php
header("Location: /");
die();
?>

@endif

@endsection
