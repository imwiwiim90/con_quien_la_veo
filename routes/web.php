<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  if (!Auth::guest()){
    $calificaciones=\App\Calificacion::where('tipo','=',"materia")
    ->whereIn('id_calificado', \App\EstudianteMateria::where('idest','=',Auth::id())->select('idmat'))->get();
  }else{
    $calificaciones=0;
  }
    return view('principal', compact('calificaciones'));
});



Route::get('/asignaturas', function () {
    $materias= \App\Materia::all();
    return view('lista_materias', compact('materias'));
});

Route::get('buscar/{id}', function ($id) {
  $materias= \App\Materia::where('nombre','like', '%' . $id . '%')->get();
  $monitores= \App\Monitor::where('nombre','like', '%' . $id . '%')->get();
  $profesores= \App\Profesor::where('nombre','like', '%' . $id . '%')->get();
      return view('busqueda', compact('materias', 'monitores', 'profesores'));
});

Route::get('calificar_docente/{id}', function ($id) {
  $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
  $ca=$c->where('id_calificado','=',$id);
  $calif=$ca->where('tipo','=',"profesor")->get();
  $profesor= \App\Profesor::where('id', '=', $id)->get();
      return view('calificar_docente', compact('profesor', 'calif'));
});

Route::post('calificar_docente/{id}', function ($id) {
  $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
  $ca=$c->where('id_calificado','=',$id);
  $calif=$ca->where('tipo','=',"profesor")->get();
  $profesor= \App\Monitor::where('id', '=', $id)->get();
      return view('calificar_docente', compact('profesor', 'calif'));
});

Route::get('calificar_monitor/{id}', function ($id) {
  $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
  $ca=$c->where('id_calificado','=',$id);
  $calif=$ca->where('tipo','=',"monitor")->get();
  $profesor= \App\Monitor::where('id', '=', $id)->get();
      return view('calificar_monitor', compact('profesor', 'calif'));
});

Route::post('calificar_monitor/{id}', function ($id) {
  $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
  $ca=$c->where('id_calificado','=',$id);
  $calif=$ca->where('tipo','=',"monitor")->get();
  $profesor= \App\Profesor::where('id', '=', $id)->get();
      return view('calificar_monitor', compact('profesor', 'calif'));
});

Route::get('calificar_asignatura/{id}', function ($id) {
  $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
  $ca=$c->where('id_calificado','=',$id);
  $calif=$ca->where('tipo','=',"materia")->get();
  $profesor= \App\Materia::where('id', '=', $id)->get();
      return view('calificar_asignatura', compact('profesor', 'calif'));
});

Route::post('calificar_asignatura/{id}', function ($id) {
  $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
  $ca=$c->where('id_calificado','=',$id);
  $calif=$ca->where('tipo','=',"materia")->get();
  $profesor= \App\Materia::where('id', '=', $id)->get();
      return view('calificar_asignatura', compact('profesor', 'calif'));
});

Route::get('docente/{id}', function ($id) {

      $cs=\App\Calificacion::where('id_calificado','=',$id);
      $calificaciones=$cs->where('tipo','=',"profesor")->orderBy('valoracion', 'DESC')->get();
      if(count($calificaciones)!=0){
            $c1=$calificaciones->avg('c1');
            $c2=$calificaciones->avg('c2');
            $c3=$calificaciones->avg('c3');
            $c4=$calificaciones->avg('c4');
          }else{
            $c1=0;$c2=0;$c3=0;$c4=0;
          }
      $profesor= \App\Profesor::where('id', '=', $id)->get();
      $materias_profesor=\App\materia_profesor::where('idprof', '=', $id)->get();
      $lista_materias=array();
      $indice=0;

      foreach ($materias_profesor as $m) {
      $x=\App\Materia::where('id', '=', $m->idmat)->get();
      foreach ($x as $y) {
      $lista_materias[$indice]=$y;
      $indice++;
       }
      }

      $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
      $ca=$c->where('id_calificado','=',$id);
      $calif=$ca->where('tipo','=',"profesor")->get();

      return view('docente', compact('c1','c2','c3','c4','profesor', 'lista_materias', 'calif', 'calificaciones'));
});

Route::get('asignatura/{id}', function ($id) {
  $cs=\App\Calificacion::where('id_calificado','=',$id);
  $calificaciones=$cs->where('tipo','=',"materia")->orderBy('valoracion', 'DESC')->get();
  if(count($calificaciones)!=0){
        $c1=$calificaciones->avg('c1');
        $c2=$calificaciones->avg('c2');
        $c3=$calificaciones->avg('c3');
        $c4=$calificaciones->avg('c4');
      }else{
        $c1=0;$c2=0;$c3=0;$c4=0;
      }
  $profesor= \App\Materia::where('id', '=', $id)->get();

  $materias_profesor=\App\materia_profesor::where('idmat', '=', $id)->get();
  $lista_profesores=array();
  $indice=0;
  $acumulador=0;
  $recomendado= new \App\Profesor;

  foreach ($materias_profesor as $m) {
  $x=\App\Profesor::where('id', '=', $m->idprof)->get();

  $cs1=\App\Calificacion::where('id_calificado','=',$x[0]->id);
  $calificaciones1=$cs1->where('tipo','=',"profesor");
  if($calificaciones1->avg('c1')>$acumulador){
    $acumulador=$calificaciones1->avg('c1');
    $recomendado=$x[0];
  }

  $lista_profesores[$indice]=$x[0];
  $indice++;

  }

  $materias_monitor=\App\MateriaMonitor::where('idmat', '=', $id)->get();
  $lista_monitores=array();
  $indice=0;

  foreach ($materias_monitor as $m) {
  $x1=\App\Monitor::where('id', '=', $m->idmon)->get();
  foreach ($x1 as $y) {
  $lista_monitores[$indice]=$y;
  $indice++;
   }
  }

  $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
  $ca=$c->where('id_calificado','=',$id);
  $calif=$ca->where('tipo','=',"materia")->get();

  $subs= \App\EstudianteMateria::where('idmat', '=', $id)->where('idest', '=', Auth::id())->get();

  return view('materia',
  compact('c1','c2','c3','c4','profesor', 'lista_profesores', 'lista_monitores', 'calif', 'calificaciones', 'recomendado', 'subs'));
});

Route::get('monitor/{id}', function ($id) {

      $cs=\App\Calificacion::where('id_calificado','=',$id);
      $calificaciones=$cs->where('tipo','=',"monitor")->orderBy('valoracion', 'DESC')->get();
      if(count($calificaciones)!=0){
            $c1=$calificaciones->avg('c1');
            $c2=$calificaciones->avg('c2');
            $c3=$calificaciones->avg('c3');
            $c4=$calificaciones->avg('c4');
          }else{
            $c1=0;$c2=0;$c3=0;$c4=0;
          }
      $profesor= \App\Monitor::where('id', '=', $id)->get();
      $materias_profesor=\App\MateriaMonitor::where('idmon', '=', $id)->get();
      $lista_materias=array();
      $indice=0;

      foreach ($materias_profesor as $m) {
      $x=\App\Materia::where('id', '=', $m->idmat)->get();
      foreach ($x as $y) {
      $lista_materias[$indice]=$y;
      $indice++;
       }
      }

      $c=\App\Calificacion::where('id_usuario', '=', Auth::id());
      $ca=$c->where('id_calificado','=',$id);
      $calif=$ca->where('tipo','=',"monitor")->get();

      return view('monitor', compact('c1','c2','c3','c4','profesor', 'lista_materias', 'calif', 'calificaciones'));
});

Route::get('/miperfil', function () {
    $user = Auth::user();
    $materias_est = \App\EstudianteMateria::all();
    $materias = \App\Materia::all();
    return view('perfil_usuario', compact ('user', 'materias_est', 'materias'));
});

Route::get('/like_p/{idc}/{idu}', 'LikeController@like_p');
Route::get('/like_m/{idc}/{idu}', 'LikeController@like_m');
Route::get('/like_a/{idc}/{idu}', 'LikeController@like_a');
Route::get('/like_i/{idc}/{idu}', 'LikeController@like_i');
Route::get('/subscribe/{idc}/{idu}', 'SubscriptionController@subscribe');

// test email
Route::post('/user_register','EmailVerificationController@sendVerificationEmail');
Route::get('/verify_email/{id}/{token}','EmailVerificationController@verifyEmail');



Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
