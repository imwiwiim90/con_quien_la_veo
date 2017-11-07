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
    return view('principal');
});

Route::get('/asignaturas', function () {
    $materias= \App\Materia::all();
    return view('lista_materias', compact('materias'));
});

Route::get('buscar/{id}', function ($id) {
      return view('busqueda');
});

Route::get('docente/{id}', function ($id) {
      $c1=4.5;
      $c2=1.5;
      $c3=3.1;
      $c4=4.9;
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
      return view('docente', compact('c1','c2','c3','c4','profesor', 'lista_materias'));
});



Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
