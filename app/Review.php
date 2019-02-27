<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $fillable = [
    'likes'
  ];
  public function book() 
  {
    return $this->belongsTo(Book::class);
  }
}
