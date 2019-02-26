@extends('layout')

@section('content')

  <h1>{{ $book->title }}</h1>
  <p>{{ $book->author }}</p>
  <p>{{ $book->genre }}</p>
  <p>{{ $book->recommended }}</p>

  @if ($book->reviews->count())
    <div>
      @foreach ($book->reviews as $review)
        <div class='book-box'>
          <p>{{ $review->name }}</p>
          <p>{{ $review->rating }}</p>
          <p>{{ $review->review }}</p>
        </div>
      @endforeach
    </div>
  @endif
  <a href="/books">Back</a>
  <a href="/books/{{ $book->id }}/edit">Edit</a>

@endsection