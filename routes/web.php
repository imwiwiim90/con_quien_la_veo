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
      return view('docente');
});



Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
