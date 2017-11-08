
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
echo "<center><h1>Calificación de ",$p->nombre,"</h1><h3>Departamento de ",$p->departamento,"</h3></center>";
}
  ?>
<br>
<center><h4>Califique según los siguientes criterios entre 0 y 5.</h4></center><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<center>
  <form method="post" action="/calificar_docente/{{ Request::route('id') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <label for="c1">¿Qué tanto recomendaría al profesor?</label>
<select class="form-control" id="c1" name="c1">
  <option value="0.0">0.0</option>
  <option value="0.5">0.5</option>
  <option value="1.0">1.0</option>
  <option value="1.5">1.5</option>
  <option value="2.0">2.0</option>
  <option value="2.5">2.5</option>
  <option value="3.0">3.0</option>
  <option value="3.5">3.5</option>
  <option value="4.0">4.0</option>
  <option value="4.5">4.5</option>
  <option value="5.0">5.0</option>
</select><br>

<label for="c2">¿Qué tan objetivo es el profesor al momento de calificar?</label>
<select class="form-control" id="c2" name="c2">
<option value="0.0">0.0</option>
<option value="0.5">0.5</option>
<option value="1.0">1.0</option>
<option value="1.5">1.5</option>
<option value="2.0">2.0</option>
<option value="2.5">2.5</option>
<option value="3.0">3.0</option>
<option value="3.5">3.5</option>
<option value="4.0">4.0</option>
<option value="4.5">4.5</option>
<option value="5.0">5.0</option>
</select><br>

<label for="c3">¿Qué tan justo es el nivel de exigencia del profesor?</label>
<select class="form-control" id="c3" name="c3">
<option value="0.0">0.0</option>
<option value="0.5">0.5</option>
<option value="1.0">1.0</option>
<option value="1.5">1.5</option>
<option value="2.0">2.0</option>
<option value="2.5">2.5</option>
<option value="3.0">3.0</option>
<option value="3.5">3.5</option>
<option value="4.0">4.0</option>
<option value="4.5">4.5</option>
<option value="5.0">5.0</option>
</select><br>

<label for="c4">¿Qué tanta es la calidad de la enseñanza?</label>
<select class="form-control" id="c4" name="c4">
<option value="0.0">0.0</option>
<option value="0.5">0.5</option>
<option value="1.0">1.0</option>
<option value="1.5">1.5</option>
<option value="2.0">2.0</option>
<option value="2.5">2.5</option>
<option value="3.0">3.0</option>
<option value="3.5">3.5</option>
<option value="4.0">4.0</option>
<option value="4.5">4.5</option>
<option value="5.0">5.0</option>
</select><br>

<label for="comentario">¿Qué comentarios tiene sobre el profesor?</label>
  <textarea class="form-control" rows="4" id="comentario" name="comentario"></textarea>
<br>

<div class="row">
   <div class="col-xs-6">
  <button type="submit"  class="btn btn-primary  btn-block" >
      Calificar
  </button>
</div>
<div class="col-xs-6">
  <a class="btn btn-primary  btn-block" href="/docente/{{ Request::route('id') }}" >
      Cancelar
  </a>
</div>
</div>




</form>
</center>
</div></div></div>


</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$c1= Input::get('c1');
$c2= Input::get('c2');
$c3= Input::get('c3');
$c4= Input::get('c4');
$com= Input::get('comentario');
$id_calificado=Request::route('id');
$idusuario=Auth::id();

$cal= new \App\Calificacion;
$cal->tipo="profesor";
$cal->id_calificado=$id_calificado;
$cal->c1=$c1;
$cal->c2=$c2;
$cal->c3=$c3;
$cal->c4=$c4;
$cal->comentario=$com;
$cal->valoracion=0;
$cal->id_usuario=$idusuario;

$cal->save();
header("Location: /docente/$id_calificado" );
die();
}

?>


@else

<?php
header("Location: /");
die();
?>

@endif

@endsection
