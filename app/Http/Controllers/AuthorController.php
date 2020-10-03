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

  public function showOneAuthor($id)
   {
       return response()->json(Autor::find($id));
   }

   public function create(Request $request)
    {
        $author = Autor::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Autor::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Autor::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }


}
