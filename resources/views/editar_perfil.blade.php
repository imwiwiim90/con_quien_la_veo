  @extends('layouts.header')

      @section('header')
      @if (!Auth::guest())
          @parent
      @endif
      @endsection

      @section('content')

      @if (!Auth::guest())


      <script type= "text/javascript" src="{{ URL::asset('js/tab_divider.js') }}"></script>

  <div class="col-md-8 col-md-offset-2">

      <div class="jumbotron">


      	


      <center>
      <h2><b>Perfil {{$user->name}}</b></h2>
      </center>

<form method="post" action="/editarperfil">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table class="table" >
        <tbody id="perfil_usuario">

          <tr>
          <td align="right"><h4>Nombre</h4></td>
          <td><textarea class="form-control" rows="1" id="name" name="name" size="200"><?php echo $user->name?></textarea></td>
          </tr>
          
          <tr>
          <td align="right"><h4>Departamento</h4></td>
          <td>
          <select class="form-control" id="c1" name="c1">
			<option value="Ingeniería de Sistemas" <?php if($user->departamento == 'Ingeniería de Sistemas') {echo "selected";} ?>>Ingeniería de Sistemas</option>
  			<option value="Ingeniería Industrial" <?php if($user->departamento == 'Ingeniería Industrial') {echo "selected";} ?>>Ingeniería Industrial</option>
  			<option value="Ingeniería Electrónica" <?php if($user->departamento == 'Ingeniería Electrónica') {echo "selected";} ?>>Ingeniería Electrónica</option>
  			<option value="Ingeniería Civil" <?php if($user->departamento == 'Ingeniería Civil') {echo "selected";} ?>>Ingeniería Civil</option>
  			</select>
  		</td>

          </tr>
        
        </tbody>
         </table>

         <div class="row">
            <div class="col-lg-4">
            <div class="bs-component">
            <right><button type="submit"  class="btn btn-primary  btn-block" >Aceptar</button></right>
            </div>
            </div>

            <div class="col-lg-4">
            <div class="bs-component">

            

            </div>
            </div>

            <div class="col-lg-4">
            <div class="bs-component">

            <left><a class="btn btn-primary  btn-block" href="/miperfil" >Cancelar</a></left>

            </div>
            </div>
            
          </div>




         </form>

      </div>

     </div>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


$dep= Input::get('c1');
$name= Input::get('name');


  $user->name=$name;
  $user->departamento=$dep;


  $user->save();

header("Location: /miperfil" );
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
