<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $table = "book";
  protected $fillable = [
      'id','name_book','quantity','author_id','created_at','updated_at','number','book_price','birth_date'
  ];
}
