

@extends('layouts.header')




@section('header')
@if (!Auth::guest())
    @parent
@endif
@endsection

@section('content')

@if (!Auth::guest())




<div class="jumbotron">



  <table class="table" >
<tbody >

<tr>

  @if (count($profesor)==0)
  <?php
  header("Location: /");
  die();
  ?>
  @endif

  <?php
foreach ($profesor as $p) {
echo "<td><h1>",$p->nombre,"</h1><h3>Estudiante de ",$p->departamento,"</h3>";
}
  ?>


  <table>
<tbody >

<tr>

@if ($c1<0.4)
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=0.4&&$c1<0.9)
<td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=0.9&&$c1<1.4)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=1.4&&$c1<1.9)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=1.9&&$c1<2.4)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=2.4&&$c1<2.9)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=2.9&&$c1<3.4)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=3.4&&$c1<3.9)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=3.9&&$c1<4.4)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=4.4&&$c1<4.9)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=60 ></td>
@elseif ($c1>=4.9)
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
@endif

<td>&nbsp</td>
<td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{round($c1, 1, PHP_ROUND_HALF_UP)}}/5</h3></td>
</tr>

</tbody>
   </table>

   <table>
 <tbody >


   <tr>
   <td><h4>Objetividad en la calificación</h4>

   <table>
 <tbody >

 <tr>

   @if ($c2<0.4)
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=0.4&&$c2<0.9)
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=0.9&&$c2<1.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=1.4&&$c2<1.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=1.9&&$c2<2.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=2.4&&$c2<2.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=2.9&&$c2<3.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=3.4&&$c2<3.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=3.9&&$c2<4.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=4.4&&$c2<4.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c2>=4.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   @endif

 <td>&nbsp</td>
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{round($c2, 1, PHP_ROUND_HALF_UP)}}/5</h3></td>
 </tr>

 </tbody>
    </table></td>


   </tr>
   <tr>
   <td><h4>Trato con los estudiantes</h4><table>
 <tbody >

 <tr>

   @if ($c3<0.4)
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=0.4&&$c3<0.9)
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=0.9&&$c3<1.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=1.4&&$c3<1.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=1.9&&$c3<2.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=2.4&&$c3<2.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=2.9&&$c3<3.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=3.4&&$c3<3.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=3.9&&$c3<4.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=4.4&&$c3<4.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c3>=4.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   @endif

 <td>&nbsp</td>
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{round($c3, 1, PHP_ROUND_HALF_UP)}}/5</h3></td>
 </tr>

 </tbody>
    </table></td>
   </tr>
   <tr>
   <td><h4>Calidad de la enseñanza</h4><table>
 <tbody >

 <tr>

   @if ($c4<0.4)
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=0.4&&$c4<0.9)
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=0.9&&$c4<1.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=1.4&&$c4<1.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=1.9&&$c4<2.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=2.4&&$c4<2.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=2.9&&$c4<3.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=3.4&&$c4<3.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=3.9&&$c4<4.4)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_empty.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=4.4&&$c4<4.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star_half.png') }}" class="img-responsive" WIDTH=40 ></td>
   @elseif ($c4>=4.9)
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
   @endif

 <td>&nbsp</td>
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{round($c4, 1, PHP_ROUND_HALF_UP)}}/5</h3></td>
 </tr>


 </tbody>
    </table></td>
   </tr>

   <tr>

   @if(count($calificaciones)==0)
     <td><br><h3>No se han registrado calificaciones</h3></td>
   @else
     <td><br><h3>Calificaciones registradas: {{count($calificaciones)}} </h3></td>
   @endif

   </tr>

 </tbody>
    </table>




</td>


<td align="right">
  <br><br>
<table>
<tbody >

<tr>

  <?php
foreach ($profesor as $p) {
echo '<td align="right"><img  class=img-responsive img-rounded WIDTH=350  style="border-radius: 10px" src="data:image/jpeg;base64,'.base64_encode( $p->imagen ).'"/></td>';

}
  ?>

</tr>
<tr>
<td><a href="/calificar_monitor/{{ Request::route('id') }}" class="btn btn-primary btn-block" style="WIDTH=350" ><?php if(count($calif)==0){echo "Calificar";}else{echo "Actualizar Calificación";} ?></a></td>
</tr>
<tr>

  <td><center><h3>Asignaturas monitoreadas</h3></center></td>

</tr>

<tr>

  <td align="left">

    <?php
  foreach ($lista_materias as $l) {
  echo '<a href="/asignatura/',$l->id,'" ><h4>',$l->nombre,'</h4></a>';

  }
    ?>

  </td>

</tr>



</tbody>
   </table>

</td>
</tr>



</tbody>
   </table>





   @if(count($calificaciones)==0)

   @else
     <center><h3>Comentarios</h3></center><br>
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
 $c->valoracion,'<a  class="btn btn-primary" style="float:right; padding:5px" href="/like_m/',$c->id,'/',Auth::id() ,'"><h4>';

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





@else

<?php
header("Location: /");
die();
?>

@endif

@endsection
