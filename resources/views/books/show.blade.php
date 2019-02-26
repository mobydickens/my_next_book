@extends('layout')

@section('content')

  <h1>{{ $book->title }}</h1>
  <p>{{ $book->author }}</p>
  <p>{{ $book->genre }}</p>
  <p>{{ $book->recommended }}</p>
  <a href="/books">Back</a>
  <a href="/books/{{ $book->id }}/edit">Edit</a>

@endsection