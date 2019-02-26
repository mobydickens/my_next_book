@extends('layout')

@section('content')

  <h1>Edit book</h1>
  <form method='POST' action='/books/{{ $book->id }}'>

    @csrf
    {{ method_field('PATCH') }}

    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" type="text" name='title' value="{{ $book->title }}" required>
    <input class="form-control {{ $errors->has('author') ? 'is-invalid' : ''}}" type="text" name='author' value="{{ $book->author }}" required>
    <input class="form-control {{ $errors->has('genre') ? 'is-invalid' : ''}}" type="text" name='genre' value="{{ $book->genre }}" required>
    <input class="form-control {{ $errors->has('recommended') ? 'is-invalid' : ''}}" type="text" name='recommended' value="{{ $book->recommended ? $book->recommended: 'N/A' }}">
    <button class='btn btn-primary' type='btn'>Save Edits</button>
  </form>
  <form method='POST' action='/books/{{ $book->id }}'>

    {{ method_field('DELETE') }}
    @csrf

    <button type='submit' class='btn btn-primary'>Delete</button>
    @if ($errors->any())
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li class='alert alert-danger' role='alert'>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
  </form>
  <p><a href='/books/{{ $book->id }}'>Back</a></p>
@endsection