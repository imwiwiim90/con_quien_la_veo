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

           @if(count($calificaciones)==0)
             <h3>No se han registrado calificaciones</h3>
           @else
             <h3>Calificaciones registradas: {{count($calificaciones)}} </h3>
           @endif

        </div>
      </div>

      <div class="col-lg-4">
        <div class="bs-component">

<center><h2>Profesores</h2></center>

<?php foreach ($lista_profesores as $l) {
  echo '<a href="/docente/',$l->id,'" ><h4>',$l->nombre,'</h4></a>';
  }  ?>

      </div>
    </div>

      <div class="col-lg-4">
        <div class="bs-component">

<center><h2>Monitores</h2></center>

<?php foreach ($lista_monitores as $l) {
  echo '<a href="/monitor/',$l->id,'" ><h4>',$l->nombre,'</h4></a>';
  }  ?>

        </div>
      </div>

      </div>

</div>

@else

<?php
header("Location: /");
die();
?>

@endif

@endsection
