@extends('layout')

@section('content')
  <div class='container'>
    <h4>Do you have a list of books to read, but aren't sure which should be next? You've come to the right place.</h4>
    <p>Get your own list started. Add some books!</p>

    <form method='POST' action="/books">
      @csrf
      <input type="text" name='title' placeholder='Title'>
      <input type="text" name='author' placeholder='Author'>
      <input type="text" name='genre' placeholder='Genre'>
      <input type="text" name='recommended' placeholder='Recommended by'>
      <button type='submit'>Add Book</button>
    </form>
  
  </div>
@endsection