<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $fillable = [
    'name',
    'review',
    'book_id',
    'rating',
    'likes'
  ];
  public function book() 
  {
    return $this->belongsTo(Book::class);
  }
}
