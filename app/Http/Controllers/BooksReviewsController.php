<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Book;

class BooksReviewsController extends Controller
{
  public function store(Book $book)
  {
    request()->validate([
      'name' => 'required',
      'rating' => 'required',
      'review' => 'required'
    ]);
    $book->addReview(request('name'), request('rating'), request('review'));
    return back();
  }
  public function update(Review $review)
  {
    $review->fill(['likes' => $review->likes + 1]);
    $review->save();
    return back();
  }
}
