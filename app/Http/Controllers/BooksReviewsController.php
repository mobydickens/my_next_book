<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class BooksReviewsController extends Controller
{
  public function update(Review $review)
  {
    $review->fill(['likes' => $review->likes + 1]);
    $review->save();
    return back();
  }
}
