@extends('layout');

@section('content')
  <h1>Books</h1>

  @foreach ($books as $book)
    
    <div class='book-box'>
      <a href='/books/{{ $book->id }}'>
        <p>{{ $book->title }}</p>
      </a>
      <p>{{ $book->author }}</p>
      <p>{{ $book->genre }}</p>
      <p>{{ $book->recommended }}</p>
    </div>
  @endforeach

  <p><a href='/'>Home</a></p>
@endsection