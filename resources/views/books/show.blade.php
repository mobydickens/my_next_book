@extends('layout')

@section('content')
  <div class='d-flex'>
    <div class='card m-4 mt-5' style="width: 20rem;">
      <img 
        src="http://www.realwayoflife.com/wp-content/uploads/2018/10/placeholder-cover-1.jpg" class="card-img-top" 
        alt="placeholder">
      <div class='card-body'>
        <h3 class='card-title'>{{ $book->title }}</h3>
        <h4 class='card-subtitle mb-2 text-muted'>{{ $book->author }}</h4>
        <p>{{ $book->genre }}</p>
        <p>Submitted by: {{ $book->recommended }}</p>
      </div>
    </div>

    <div class='m-5'>
      <h5>COMMUNITY REVIEWS</h5>
      <h6>Average Rating: - </h6>
      
      @if ($book->reviews->count())
        
        @foreach ($book->reviews as $review)
          <div class='card' style="width: 38rem;">
            <div class='card-header d-flex justify-content-between'>

            <!-- Stars -->
              @if ($review->rating == '5')
                <div>⭐⭐⭐⭐⭐</div>
                @elseif ($review->rating == '4')
                <div>⭐⭐⭐⭐</div>
                @elseif ($review->rating == '3')
                <div>⭐⭐⭐</div>
                @elseif ($review->rating == '2')
                <div>⭐⭐</div>
                @elseif ($review->rating == '1')
                <div>⭐</div>
                @elseif ($review->rating == '0')
                <div class='badge badge-warning align-self-center'>Unfinished</div>
              @endif

            <!-- number of likes -->
              <div class='d-flex'>
                <div class='d-flex'>
                  <div>{{ $review->likes }} likes</div>
                  <i class="ml-2 mr-4 align-self-center fas fa-heart"></i>
                </div>

              <!-- like button -->
                <div>
                  <form method='POST' action="/reviews/{{ $review->id }}">
                    @method('PATCH')
                    @csrf
                    <input class='d-none' type="text" name='likes' value='{{ $review->likes }}'>
                    <button type='submit' class='badge badge-primary'>Like</button>
                  </form>
                </div>
              </div>

            </div>
            <div class='card-body'>
              <div class='blockquote mb-0'>
                <p>{{ $review->review }}</p>
                <p class='blockquote-footer'>{{ $review->name }}</p>
              </div>
            </div>
          </div>
        @endforeach
        <a href="/books/{{ $book->id }}/edit">Leave a review</a>
      @endif
      </div>
  </div>
  <a href="/books">Back</a>

@endsection