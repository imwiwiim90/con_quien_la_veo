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


    public function like()
    {
      return \App\Megusta::create([
          'id_usuario' => 3,
          'id_comentario' => 3,
      ]);
    }
}
