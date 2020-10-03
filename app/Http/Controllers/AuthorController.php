<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;
class AuthorController extends Controller
{
  public function showAllAuthors()
  {
      return response()->json(Autor::all());
      /*$res['success'] = true;
      $res['message'] = 'Tu email es incorrecto 2';
      return response($res);*/
  }
}
