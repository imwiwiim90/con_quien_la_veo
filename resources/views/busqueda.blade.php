



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

                <tr>
                <td><h3>Análisis y diseño orientado a objetos</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <td><h3>Estructuras de datos</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Bases de datos</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Pensamiento sistémico</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Introducción a la ingeniería de sistemas</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Sistemas de información</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Comunicaciones y redes</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Sistemas operativos</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Ingeniería de software</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>

                </tbody>
               </table>

                 <center>
                 <ul class="pagination pagination-sm" id="myPager2"></ul>
                 </center>


               <script>$('#buscar_materia').pageMe({pagerSelector:'#myPager2',showPrevNext:true,hidePageNumbers:false,perPage:3});</script>


            </div>
          </div>

          <div class="col-lg-4">
            <div class="bs-component">
              <center>

              <h2>Docentes</h2>

              </center>


              <table class="table" >
                <tbody id="buscar_docente">

                <tr>
                <td><h3>Anabel Montero</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary " href="/docente/1">Consultar</a></td>
                </tr>
                <td><h3>Leonardo Flórez</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Rafael Páez</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Miguel Torres</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Julio Carreño</h3>Departamento de ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>

                </tbody>
               </table>

                 <center>
                 <ul class="pagination pagination-sm" id="myPager3"></ul>
                 </center>


               <script>$('#buscar_docente').pageMe({pagerSelector:'#myPager3',showPrevNext:true,hidePageNumbers:false,perPage:3});</script>



            </div>
          </div>

          <div class="col-lg-4">
            <div class="bs-component">
              <center>

              <h2>Monitores</h2>

              </center>


              <table class="table" >
                <tbody id="buscar_monitor">

                <tr>
                <td><h3>Felipe Jiménez</h3>Ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <td><h3>Juan Pablo Suárez</h3>Ingeniería Industrial</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Ana Cristina Macià</h3>Ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Juan Sebastián Gómez</h3>Ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>
                <tr>
                <td><h3>Camilo Mogollón</h3>Ingeniería de sistemas</td>
                <td align="right"><br><a class="btn btn-primary">Consultar</a></td>
                </tr>

                </tbody>
               </table>

                 <center>
                 <ul class="pagination pagination-sm" id="myPager4"></ul>
                 </center>


               <script>$('#buscar_monitor').pageMe({pagerSelector:'#myPager4',showPrevNext:true,hidePageNumbers:false,perPage:3});</script>

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
