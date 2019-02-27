<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Book;

class BooksReviewsController extends Controller
{
  public function store(Book $book)
  {
    Review::create([
      'book_id' => $book->id,
      'name' => request('name'),
      'rating' => request('rating'),
      'review' => request('review')
    ]);
    return back();
  }
  public function update(Review $review)
  {
    $review->fill(['likes' => $review->likes + 1]);
    $review->save();
    return back();
  }
}
