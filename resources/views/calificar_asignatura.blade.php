
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
echo "<center><h1>Calificación de ",$p->nombre,"</h1><h3>Dictada por el Departamento de ",$p->departamento,"</h3></center>";
}
  ?>
<br>
<center><h4>Califique según los siguientes criterios entre 0 y 5.</h4></center><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<center>
  <form method="post" action="/calificar_asignatura/{{ Request::route('id') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <label for="c1">¿Qué tanto recomendaría la asignatura?</label>
<select class="form-control" id="c1" name="c1">
  <option value="0.0" <?php if(count($calif)!=0){if($calif[0]->c1==0.0){echo "selected";}} ?>>0.0</option>
  <option value="0.5" <?php if(count($calif)!=0){if($calif[0]->c1==0.5){echo "selected";}} ?>>0.5</option>
  <option value="1.0" <?php if(count($calif)!=0){if($calif[0]->c1==1.0){echo "selected";}} ?>>1.0</option>
  <option value="1.5" <?php if(count($calif)!=0){if($calif[0]->c1==1.5){echo "selected";}} ?>>1.5</option>
  <option value="2.0" <?php if(count($calif)!=0){if($calif[0]->c1==2.0){echo "selected";}} ?>>2.0</option>
  <option value="2.5" <?php if(count($calif)!=0){if($calif[0]->c1==2.5){echo "selected";}} ?>>2.5</option>
  <option value="3.0" <?php if(count($calif)!=0){if($calif[0]->c1==3.0){echo "selected";}} ?>>3.0</option>
  <option value="3.5" <?php if(count($calif)!=0){if($calif[0]->c1==3.5){echo "selected";}} ?>>3.5</option>
  <option value="4.0" <?php if(count($calif)!=0){if($calif[0]->c1==4.0){echo "selected";}} ?>>4.0</option>
  <option value="4.5" <?php if(count($calif)!=0){if($calif[0]->c1==4.5){echo "selected";}} ?>>4.5</option>
  <option value="5.0" <?php if(count($calif)!=0){if($calif[0]->c1==5.0){echo "selected";}} ?>>5.0</option>
</select><br>

<label for="c2">¿Qué tan alto es el nivel de complejidad de la asignatura?</label>
<select class="form-control" id="c2" name="c2">
  <option value="0.0" <?php if(count($calif)!=0){if($calif[0]->c2==0.0){echo "selected";}} ?>>0.0</option>
  <option value="0.5" <?php if(count($calif)!=0){if($calif[0]->c2==0.5){echo "selected";}} ?>>0.5</option>
  <option value="1.0" <?php if(count($calif)!=0){if($calif[0]->c2==1.0){echo "selected";}} ?>>1.0</option>
  <option value="1.5" <?php if(count($calif)!=0){if($calif[0]->c2==1.5){echo "selected";}} ?>>1.5</option>
  <option value="2.0" <?php if(count($calif)!=0){if($calif[0]->c2==2.0){echo "selected";}} ?>>2.0</option>
  <option value="2.5" <?php if(count($calif)!=0){if($calif[0]->c2==2.5){echo "selected";}} ?>>2.5</option>
  <option value="3.0" <?php if(count($calif)!=0){if($calif[0]->c2==3.0){echo "selected";}} ?>>3.0</option>
  <option value="3.5" <?php if(count($calif)!=0){if($calif[0]->c2==3.5){echo "selected";}} ?>>3.5</option>
  <option value="4.0" <?php if(count($calif)!=0){if($calif[0]->c2==4.0){echo "selected";}} ?>>4.0</option>
  <option value="4.5" <?php if(count($calif)!=0){if($calif[0]->c2==4.5){echo "selected";}} ?>>4.5</option>
  <option value="5.0" <?php if(count($calif)!=0){if($calif[0]->c2==5.0){echo "selected";}} ?>>5.0</option>
</select><br>

<label for="c3">¿Qué nota obtuvo en la asignatura?</label>
<select class="form-control" id="c3" name="c3">
  <option value="0.0" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.0</option>
  <option value="0.1" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.1</option>
  <option value="0.2" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.2</option>
  <option value="0.3" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.3</option>
  <option value="0.4" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.4</option>
  <option value="0.5" <?php if(count($calif)!=0){if($calif[0]->c3==0.5){echo "selected";}} ?>>0.5</option>
  <option value="0.6" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.6</option>
  <option value="0.7" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.7</option>
  <option value="0.8" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.8</option>
  <option value="0.9" <?php if(count($calif)!=0){if($calif[0]->c3==0.0){echo "selected";}} ?>>0.9</option>

  <option value="1.0" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.0</option>
  <option value="1.1" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.1</option>
  <option value="1.2" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.2</option>
  <option value="1.3" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.3</option>
  <option value="1.4" <?php if(count($calif)!=0){if($calif[0]->c3==1.5){echo "selected";}} ?>>1.4</option>
  <option value="1.5" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.5</option>
  <option value="1.6" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.6</option>
  <option value="1.7" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.7</option>
  <option value="1.8" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.8</option>
  <option value="1.9" <?php if(count($calif)!=0){if($calif[0]->c3==1.0){echo "selected";}} ?>>1.9</option>

  <option value="2.0" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.0</option>
  <option value="2.1" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.1</option>
  <option value="2.2" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.2</option>
  <option value="2.3" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.3</option>
  <option value="2.4" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.4</option>
  <option value="2.5" <?php if(count($calif)!=0){if($calif[0]->c3==2.5){echo "selected";}} ?>>2.5</option>
  <option value="2.6" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.6</option>
  <option value="2.7" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.7</option>
  <option value="2.8" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.8</option>
  <option value="2.9" <?php if(count($calif)!=0){if($calif[0]->c3==2.0){echo "selected";}} ?>>2.9</option>

  <option value="3.0" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.0</option>
  <option value="3.1" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.1</option>
  <option value="3.2" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.2</option>
  <option value="3.3" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.3</option>
  <option value="3.4" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.4</option>
  <option value="3.5" <?php if(count($calif)!=0){if($calif[0]->c3==3.5){echo "selected";}} ?>>3.5</option>
  <option value="3.6" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.6</option>
  <option value="3.7" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.7</option>
  <option value="3.8" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.8</option>
  <option value="3.9" <?php if(count($calif)!=0){if($calif[0]->c3==3.0){echo "selected";}} ?>>3.9</option>

  <option value="4.0" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.0</option>
  <option value="4.1" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.1</option>
  <option value="4.2" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.2</option>
  <option value="4.3" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.3</option>
  <option value="4.4" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.4</option>
  <option value="4.5" <?php if(count($calif)!=0){if($calif[0]->c3==4.5){echo "selected";}} ?>>4.5</option>
  <option value="4.6" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.6</option>
  <option value="4.7" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.7</option>
  <option value="4.8" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.8</option>
  <option value="4.9" <?php if(count($calif)!=0){if($calif[0]->c3==4.0){echo "selected";}} ?>>4.9</option>

  <option value="5.0" <?php if(count($calif)!=0){if($calif[0]->c3==5.0){echo "selected";}} ?>>5.0</option>
</select><br>

<label for="c4">¿Qué tan alto es el nivel de exigencia de la asignatura?</label>
<select class="form-control" id="c4" name="c4">
  <option value="0.0" <?php if(count($calif)!=0){if($calif[0]->c4==0.0){echo "selected";}} ?>>0.0</option>
  <option value="0.5" <?php if(count($calif)!=0){if($calif[0]->c4==0.5){echo "selected";}} ?>>0.5</option>
  <option value="1.0" <?php if(count($calif)!=0){if($calif[0]->c4==1.0){echo "selected";}} ?>>1.0</option>
  <option value="1.5" <?php if(count($calif)!=0){if($calif[0]->c4==1.5){echo "selected";}} ?>>1.5</option>
  <option value="2.0" <?php if(count($calif)!=0){if($calif[0]->c4==2.0){echo "selected";}} ?>>2.0</option>
  <option value="2.5" <?php if(count($calif)!=0){if($calif[0]->c4==2.5){echo "selected";}} ?>>2.5</option>
  <option value="3.0" <?php if(count($calif)!=0){if($calif[0]->c4==3.0){echo "selected";}} ?>>3.0</option>
  <option value="3.5" <?php if(count($calif)!=0){if($calif[0]->c4==3.5){echo "selected";}} ?>>3.5</option>
  <option value="4.0" <?php if(count($calif)!=0){if($calif[0]->c4==4.0){echo "selected";}} ?>>4.0</option>
  <option value="4.5" <?php if(count($calif)!=0){if($calif[0]->c4==4.5){echo "selected";}} ?>>4.5</option>
  <option value="5.0" <?php if(count($calif)!=0){if($calif[0]->c4==5.0){echo "selected";}} ?>>5.0</option>
</select><br>

<label for="comentario">¿Qué comentarios tiene sobre la asignatura?</label>
  <textarea class="form-control" rows="4" id="comentario" name="comentario"><?php if(count($calif)!=0){if($calif[0]->comentario!=null){echo $calif[0]->comentario;}} ?></textarea>
<br>

<div class="row">
   <div class="col-xs-6">
  <button type="submit"  class="btn btn-primary  btn-block" >
      Calificar
  </button>
</div>
<div class="col-xs-6">
  <a class="btn btn-primary  btn-block" href="/asignatura/{{ Request::route('id') }}" >
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

if(count($calif)==0){
$cal= new \App\Calificacion;
$cal->tipo="materia";
$cal->id_calificado=$id_calificado;
$cal->c1=$c1;
$cal->c2=$c2;
$cal->c3=$c3;
$cal->c4=$c4;
$cal->comentario=$com;
$cal->valoracion=0;
$cal->id_usuario=$idusuario;

$cal->save();
}
else{
  $calif[0]->c1=$c1;
  $calif[0]->c2=$c2;
  $calif[0]->c3=$c3;
  $calif[0]->c4=$c4;
  $calif[0]->comentario=$com;
  $calif[0]->valoracion=0;

  $calif[0]->save();
}
header("Location: /asignatura/$id_calificado" );
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
