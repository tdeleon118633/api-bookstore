<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

use Laravel\Lumen\Auth\Authorizable;

class Autor extends Model
{
  protected $table = "author";
  protected $fillable = [
      'id','name'
  ];
}
