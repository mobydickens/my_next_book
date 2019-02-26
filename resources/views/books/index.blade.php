@extends('layout')

@section('content')
  <h3 class='mt-4'>Book Collection</h3>
  <h5>Here are all of our user-submitted books. Feel free to browse or get a random book suggestion now!</h5>

  <div class='d-flex flex-wrap'>
    @foreach ($books as $book)
      <div class='card m-2' style="width: 20rem;">
        <div class='card-body'>
          <div class='d-flex justify-content-between'>
            <a href='/books/{{ $book->id }}'>
              <h5 class='card-title'>{{ $book->title }}</h5>
            </a>
            <p class='align-self-start badge badge-success'>{{ $book->genre }}</p>
          </div>
          <h6 class='card-subtitle mb-2 text-muted'>{{ $book->author }}</h6>
          <p class='card-text'>Submitted by: {{ $book->recommended }}</p>
        </div>
      </div>
    @endforeach
  </div>

@endsection