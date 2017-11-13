<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnverifiedUser extends Model
{
    protected $fillable = [
    	'name','email','password','departamento'
    ];


    protected $hidden = [
    	'password','verification_token',
    ];
}
