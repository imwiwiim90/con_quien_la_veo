<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
  protected $fillable = [
      'id', 'nombre', 'departamento', 'imagen'
  ];
}
