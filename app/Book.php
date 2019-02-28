<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
    'owner_id',
    'title',
    'author',
    'genre',
    'recommended'
  ];
  public function reviews() 
  {
    return $this->hasMany(Review::class);
  }
  public function addReview($attributes)
  {
    $this->reviews()->create(compact($attributes));
  }
}
