  @extends('layouts.header')

      @section('header')
      @if (!Auth::guest())
          @parent
      @endif
      @endsection

      @section('content')

      @if (!Auth::guest())

      <center>
      <h2><b>Lista de asignaturas</b><h2>
      </center>

      <script type= "text/javascript" src="js/tab_divider.js"></script>

      <div class="col-md-8 col-md-offset-2">

              <table class="table" >
        <tbody id="asignaturas_total">

          <?php
        foreach ($materias as $m) {
          echo "<tr>
          <td><h3>",$m->nombre,"</h3>Departamento de ",$m->departamento,"</td>
          <td align='right'><br><a href='/asignatura/$m->id'class='btn btn-primary'>Consultar</a></td>
          </tr>";
        }
          ?>

        </tbody>
               </table>

      </div>

        @if (count($materias)>=10)
       <div class="col-md-12 text-center" >
         <ul class="pagination pagination-sm" id="myPager"></ul>
       </div>
       @endif

       <script>$('#asignaturas_total').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:10});</script>

      @else

        <?php
        header("Location: /");
        die();
        ?>

      @endif
      @endsection
