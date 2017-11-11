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
  echo "<td><h1>",$p->nombre,"</h1><h3>Dictada por el Departamento de ",$p->departamento,"</h3>";
  }
  ?>

  <div class="row">

      <div class="col-lg-4">
        <div class="bs-component">


        </div>
      </div>

      <div class="col-lg-4">
        <div class="bs-component">

<center><h2>Profesores</h2></center>

      </div>
    </div>

      <div class="col-lg-4">
        <div class="bs-component">

<center><h2>Monitores</h2></center>

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
