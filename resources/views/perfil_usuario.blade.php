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
          <div class="row">
            <div class="col-lg-4">
            <div class="bs-component">


     

            </div>
            </div>
            <div class="col-lg-4">
            <div class="bs-component">


            <center><a class="btn btn-primary btn-block" href="/editarperfil" >Editar</a></center>

            </div>
            </div>
            <div class="col-lg-4">
            <div class="bs-component">



            </div>
            </div>
          </div>

</div>
      </div>




         <div class="col-md-8 col-md-offset-2">
<div class="jumbotron">


    <center>
      <h3><b>Asignaturas de Interés</b><h3>
      </center>
            @if (count($materias_est) != 0)

              <table class="table" >
        <tbody id="perfil_usuario2">

          <?php
        foreach ($materias_est as $m) {
       
            foreach ($materias as $ma) {
              if ($ma->id == $m->idmat) {
                echo "<tr>
                <td><h3>",$ma->nombre,"</h3>Departamento de ",$ma->departamento,"</td>
                <td align='right'><br><a href='/asignatura/$m->idmat'class='btn btn-primary'>Editar</a></td>
                </tr>";
              }
            }
            
          
        }
          ?>
        </tbody>
               </table>
               @else 

              <center>
      <h5><b>Actualmente no se encuentra suscrito a ninguna Asignatura</b><h5>
      </center>

               @endif
   
</div>
      </div>
        @if (count($materias_est)>2)
       <div class="col-md-12 text-center" >
         <ul class="pagination pagination-sm" id="myPager"></ul>
       </div>
       @endif

       <script>$('#perfil_usuario2').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:2});</script>
     


           @else

        <?php
        header("Location: /");
        die();
        ?>

      @endif
      @endsection
