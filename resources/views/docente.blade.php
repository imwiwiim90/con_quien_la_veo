

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
<td><h1>Anabel Montero</h1><h3>Departamento de ingeniería de sistemas</h3>


  <table>
<tbody >

<tr>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=60 ></td>
<td>&nbsp</td>
<td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">5.0/5.0</h3></td>
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
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td>&nbsp</td>
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">5.0/5.0</h3></td>
 </tr>

 </tbody>
    </table></td>


   </tr>
   <tr>
   <td><h4>Nivel de exigencia</h4><table>
 <tbody >

 <tr>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td>&nbsp</td>
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">5.0/5.0</h3></td>
 </tr>

 </tbody>
    </table></td>
   </tr>
   <tr>
   <td><h4>Calidad de la enseñanza</h4><table>
 <tbody >

 <tr>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td><img src="{{ URL::asset('imgs/star.png') }}" class="img-responsive" WIDTH=40 ></td>
 <td>&nbsp</td>
 <td align="right"><h3 style="text-align: justify; font-size: calc(100% + 0.6vw);">5.0/5.0</h3></td>
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
<td align="right"><img src="{{ URL::asset('imgs/teacher.jpg') }}" class="img-responsive img-rounded" WIDTH=350 ></td>
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
