<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
  public function showAllBook()
  {
      return response()->json(Category::all());
      /*$res['success'] = true;
      $res['message'] = 'Tu email es incorrecto 2';
      return response($res);*/
  }

  public function showOneBook($id)
   {
       return response()->json(Category::find($id));
   }

   public function create(Request $request)
    {
        $author = Category::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Category::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
