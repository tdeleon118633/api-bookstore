<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookIssuedDetail;

class BookIssuedDetailsController extends Controller
{
  public function showAllBook()
  {
      return response()->json(BookIssuedDetail::all());
      /*$res['success'] = true;
      $res['message'] = 'Tu email es incorrecto 2';
      return response($res);*/
  }

  public function showOneBook($id)
   {
       return response()->json(BookIssuedDetail::find($id));
   }

   public function create(Request $request)
    {
        $author = BookIssuedDetail::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = BookIssuedDetail::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        BookIssuedDetail::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
