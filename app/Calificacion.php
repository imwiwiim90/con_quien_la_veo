<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
  protected $fillable = [
      'id', 'tipo', 'id_calificado', 'c1', 'c2', 'c3', 'c4', 'comentario', 'valoracion'
  ];
}
