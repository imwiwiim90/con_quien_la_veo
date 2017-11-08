
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
<div class="form-group">
  <label for="c1">¿Qué tanto recomendaría al profesor?</label>
<select class="form-control" id="c1">
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
<select class="form-control" id="c2">
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
<select class="form-control" id="c3">
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
<select class="form-control" id="c4">
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
  <textarea class="form-control" rows="5" id="comentario"></textarea>

</div>
</center>
</div></div></div>


</div>


@else

<?php
header("Location: /");
die();
?>

@endif

@endsection
