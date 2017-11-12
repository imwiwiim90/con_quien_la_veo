<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
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

    public function subscribe($idc, $idu){

      $c= \App\EstudianteMateria::where('idmat', '=', $idc)->where('idest', '=', $idu)->get();

      if(count($c)==0){

       \App\EstudianteMateria::create([
          'idest' => $idu,
          'idmat' => $idc,
      ]);

      header("Location: /asignatura/$idc");
      die();

    }else{

      $c[0]->delete();

      header("Location: /asignatura/$idc");
      die();
    }

    }

}
