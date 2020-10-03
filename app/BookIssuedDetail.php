<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookIssuedDetail extends Model
{
  protected $table = "book_issued_details";
  protected $fillable = [
      'id','id_libro','id_user','dateOfIssue','dateReturn','status','penaltyFee'
  ];
}
