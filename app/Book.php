<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
    'title',
    'author',
    'genre',
    'recommended'
  ];
  public function reviews() 
  {
    return $this->hasMany(Review::class);
  }
  public function addReview($name, $rating, $review)
  {
    $this->reviews()->create(compact('name', 'rating', 'review'));
  }
}
