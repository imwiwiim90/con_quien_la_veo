<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Megusta extends Model
{
  protected $fillable = [
      'id', 'id_usuario', 'id_comentario'
  ];
}
