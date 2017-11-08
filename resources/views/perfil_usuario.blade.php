  @extends('layouts.header')

      @section('header')
      @if (!Auth::guest())
          @parent
      @endif
      @endsection

      @section('content')

      @if (!Auth::guest())

<div class="jumbotron">

      <center>
      <h2><b>Perfil {{$user->name}}</b></h2>
      </center>

</div>

           @else

        <?php
        header("Location: /");
        die();
        ?>

      @endif
      @endsection
