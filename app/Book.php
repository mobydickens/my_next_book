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
}
