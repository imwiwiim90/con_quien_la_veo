



      @extends('layouts.header')




      @section('header')
      @if (!Auth::guest())
          @parent
      @endif
      @endsection

      @section('content')

      @if (!Auth::guest())
      <center>
      <h2><b>Resultados de la búsqueda:  {{ Request::route('id') }}</b><h2>
      </center>

      <script type= "text/javascript" src="{{ URL::asset('js/tab_divider.js') }}"></script>

      <div class="row">

          <div class="col-lg-4">
            <div class="bs-component">
              <center>

              <h2>Asignaturas</h2>

              </center>



              <table class="table" >
                <tbody id="buscar_materia">

                  <?php
                foreach ($materias as $m) {
                  echo "<tr>
                  <td><h3>",$m->nombre,"</h3>Departamento de ",$m->departamento,"</td>
                  <td align='right'><br><a href='/asignatura/$m->id'class='btn btn-primary'>Consultar</a></td>
                  </tr>";
                }
                if(count($materias)==0){
                  echo "<center><h4>No se encontraron resultados de asignaturas.</h4></center>";
                }

                  ?>

                </tbody>
               </table>
                @if (count($materias)>4)
                 <center>
                 <ul class="pagination pagination-sm" id="myPager2"></ul>
                 </center>
                @endif


               <script>$('#buscar_materia').pageMe({pagerSelector:'#myPager2',showPrevNext:true,hidePageNumbers:false,perPage:4});</script>


            </div>
          </div>

          <div class="col-lg-4">
            <div class="bs-component">
              <center>

              <h2>Docentes</h2>

              </center>


              <table class="table" >
                <tbody id="buscar_docente">

                  <?php
                foreach ($profesores as $m) {
                  echo "<tr>
                  <td><h3>",$m->nombre,"</h3>Departamento de ",$m->departamento,"</td>
                  <td align='right'><br><a href='/docente/$m->id'class='btn btn-primary'>Consultar</a></td>
                  </tr>";
                }
                if(count($profesores)==0){

                  echo "<center><h4>No se encontraron resultados de docentes.</h4></center>";
                }

                  ?>


                </tbody>
               </table>
                @if (count($profesores)>4)
                 <center>
                 <ul class="pagination pagination-sm" id="myPager3"></ul>
                 </center>
                 @endif


               <script>$('#buscar_docente').pageMe({pagerSelector:'#myPager3',showPrevNext:true,hidePageNumbers:false,perPage:4});</script>



            </div>
          </div>

          <div class="col-lg-4">
            <div class="bs-component">

              <center><h2>Monitores</h2></center>


              <table class="table" >
                <tbody id="buscar_monitor">

                  <?php
                foreach ($monitores as $m) {
                  echo "<tr>
                  <td><h3>",$m->nombre,"</h3>",$m->departamento,"</td>
                  <td align='right'><br><a href='/monitor/$m->id'class='btn btn-primary'>Consultar</a></td>
                  </tr>";
                }
                if(count($monitores)==0){

                  echo "<center><h4>No se encontraron resultados de monitores.</h4></center>";
                }

                  ?>

                </tbody>
               </table>
                @if (count($monitores)>4)
                 <center>
                 <ul class="pagination pagination-sm" id="myPager4"></ul>
                 </center>
                 @endif

               <script>$('#buscar_monitor').pageMe({pagerSelector:'#myPager4',showPrevNext:true,hidePageNumbers:false,perPage:4});</script>

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
