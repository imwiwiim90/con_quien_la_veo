<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudianteMateria extends Model
{
  protected $fillable = [
      'id', 'idest', 'idmat'
  ];
}
