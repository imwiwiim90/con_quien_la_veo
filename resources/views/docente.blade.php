

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
echo "<td><h1>",$p->nombre,"</h1><h3>Departamento de ",$p->departamento,"</h3>";
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
<td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{$c1}}/5</h3></td>
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
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{$c2}}/5</h3></td>
 </tr>

 </tbody>
    </table></td>


   </tr>
   <tr>
   <td><h4>Nivel de exigencia</h4><table>
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
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{$c3}}/5</h3></td>
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
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">{{$c4}}/5</h3></td>
 </tr>

 </tbody>
    </table></td>
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
echo '<td align="right"><img  class=img-responsive img-rounded WIDTH=350  src="data:image/jpeg;base64,'.base64_encode( $p->imagen ).'"/></td>';

}
  ?>

</tr>
<tr>
<td><a class="btn btn-primary btn-block" style="WIDTH=350" >Calificar</a></td>
</tr>
<tr>

  <td><center><h3>Asignaturas dictadas</h3></center></td>

</tr>

<tr>
  <td align="left">

    <a  ><h4>Estructuras de datos</h4></a>
    <a  ><h4>Ingeniería de software</h4></a>
    <a  ><h4>Análisis y diseño orientado a objetos</h4></a>

  </td>

</tr>


</tbody>
   </table>

</td>
</tr>



</tbody>
   </table>




   <center><h3>Comentarios</h3></center>


</div>


@else

<?php
header("Location: /");
die();
?>

@endif

@endsection
