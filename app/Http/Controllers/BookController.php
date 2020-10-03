<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
  public function showAllBook()
  {
      return response()->json(Book::all());
      /*$res['success'] = true;
      $res['message'] = 'Tu email es incorrecto 2';
      return response($res);*/
  }

  public function showOneBook($id)
   {
       return response()->json(Book::find($id));
   }

   public function create(Request $request)
    {
        $author = Book::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Book::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Book::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
