<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia_profesor extends Model
{
  protected $fillable = [
      'id', 'idprof', 'idmat'
  ];
}
