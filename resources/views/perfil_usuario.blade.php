  @extends('layouts.header')

      @section('header')
      @if (!Auth::guest())
          @parent
      @endif
      @endsection

      @section('content')

      @if (!Auth::guest())

  <div class="col-md-8 col-md-offset-2">
<div class="jumbotron">

      <center>
      <h2><b>Perfil {{$user->name}}</b></h2>
      </center>

        <table class="table" >
        <tbody id="perfil_usuario">

          
        
          <tr>
          <td><h4>Correo Institucional</h4></td>
          <td align='right'><h4>{{$user->email}}</h4></td>
          </tr>
          <tr>
          <td><h4>Departamento</h4></td>
          <td align='right'><h4>{{$user->departamento}}</h4></td>
          </tr>
        
          

        </tbody>
               </table>

      </div>
      </div>

           @else

        <?php
        header("Location: /");
        die();
        ?>

      @endif
      @endsection
