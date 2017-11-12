<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function like_p($idc, $idu)
    {

      $c= \App\Megusta::where('id_comentario', '=', $idc)->where('id_usuario', '=', $idu)->get();

      if(count($c)==0){

       \App\Megusta::create([
          'id_usuario' => $idu,
          'id_comentario' => $idc,
      ]);
      $com= \App\Calificacion::where('id', '=', $idc)->get();
      $com[0]->valoracion=$com[0]->valoracion+1;
      $com[0]->save();

      $x=$com[0]->id_calificado;

      header("Location: /docente/$x");
      die();

    }else{

      $c[0]->delete();

      $com= \App\Calificacion::where('id', '=', $idc)->get();
      $com[0]->valoracion=$com[0]->valoracion-1;
      $com[0]->save();

      $x=$com[0]->id_calificado;

      header("Location: /docente/$x");
      die();
    }



    }


    public function like_m($idc, $idu)
    {

      $c= \App\Megusta::where('id_comentario', '=', $idc)->where('id_usuario', '=', $idu)->get();

      if(count($c)==0){

       \App\Megusta::create([
          'id_usuario' => $idu,
          'id_comentario' => $idc,
      ]);
      $com= \App\Calificacion::where('id', '=', $idc)->get();
      $com[0]->valoracion=$com[0]->valoracion+1;
      $com[0]->save();

      $x=$com[0]->id_calificado;

      header("Location: /monitor/$x");
      die();

    }else{

      $c[0]->delete();

      $com= \App\Calificacion::where('id', '=', $idc)->get();
      $com[0]->valoracion=$com[0]->valoracion-1;
      $com[0]->save();

      $x=$com[0]->id_calificado;

      header("Location: /monitor/$x");
      die();
    }
  }

  public function like_a($idc, $idu)
  {

    $c= \App\Megusta::where('id_comentario', '=', $idc)->where('id_usuario', '=', $idu)->get();

    if(count($c)==0){

     \App\Megusta::create([
        'id_usuario' => $idu,
        'id_comentario' => $idc,
    ]);
    $com= \App\Calificacion::where('id', '=', $idc)->get();
    $com[0]->valoracion=$com[0]->valoracion+1;
    $com[0]->save();

    $x=$com[0]->id_calificado;

    header("Location: /asignatura/$x");
    die();

  }else{

    $c[0]->delete();

    $com= \App\Calificacion::where('id', '=', $idc)->get();
    $com[0]->valoracion=$com[0]->valoracion-1;
    $com[0]->save();

    $x=$com[0]->id_calificado;

    header("Location: /asignatura/$x");
    die();
  }
}

public function like_i($idc, $idu)
{

  $c= \App\Megusta::where('id_comentario', '=', $idc)->where('id_usuario', '=', $idu)->get();

  if(count($c)==0){

   \App\Megusta::create([
      'id_usuario' => $idu,
      'id_comentario' => $idc,
  ]);
  $com= \App\Calificacion::where('id', '=', $idc)->get();
  $com[0]->valoracion=$com[0]->valoracion+1;
  $com[0]->save();

  $x=$com[0]->id_calificado;

  header("Location: /");
  die();

}else{

  $c[0]->delete();

  $com= \App\Calificacion::where('id', '=', $idc)->get();
  $com[0]->valoracion=$com[0]->valoracion-1;
  $com[0]->save();

  $x=$com[0]->id_calificado;

  header("Location: /");
  die();
}
}



}
