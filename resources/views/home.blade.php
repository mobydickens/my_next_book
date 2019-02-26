@extends('layout')

@section('content')
  <div class='container'>
    <h4>Do you have a list of books to read, but aren't sure which should be next? You've come to the right place.</h4>
    <p>Get your own list started. Add some books!</p>

    <form method='POST' action="/books">
      @csrf
      <input class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" type="text" name='title' placeholder='Title'>
      <input class="form-control {{ $errors->has('author') ? 'is-invalid' : ''}}" type="text" name='author' placeholder='Author' required>
      <input class="form-control {{ $errors->has('genre') ? 'is-invalid' : ''}}" type="text" name='genre' placeholder='Genre' required>
      <input class="form-control {{ $errors->has('recommended') ? 'is-invalid' : ''}}" type="text" name='recommended' placeholder='Recommended by' required>
      <button class='btn btn-primary' type='btn'>Add Book</button>
      @if ($errors->any())
      <div>
        @foreach ($errors->all() as $error)
          <div class='alert alert-danger' role='alert'>{{ $error }}</div>
        @endforeach
      </div>
      @endif
    </form>
  </div>
@endsection