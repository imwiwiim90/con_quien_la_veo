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
      $c2=3.5;
      $c3=3.1;
      $c4=4.9;
      return view('docente', compact('c1','c2','c3','c4'));
});



Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
