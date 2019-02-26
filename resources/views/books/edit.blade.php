@extends('layout')

@section('content')

  <h1>Edit book</h1>
  <form method='POST' action='/books/{{ $book->id }}'>
  
    @csrf
    {{ method_field('PATCH') }}

    <input type="text" name='title' value="{{ $book->title }}">
    <input type="text" name='author' value="{{ $book->author }}">
    <input type="text" name='genre' value="{{ $book->genre }}">
    <input type="text" name='recommended' value="{{ $book->recommended }}">
    <button type='submit'>Save Edits</button>
  </form>
  <p><a href='/'>Home</a></p>
@endsection