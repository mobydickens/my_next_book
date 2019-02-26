@extends('layout')

@section('content')
  <div class='mb-4'>
    <div class="mt-4 jumbotron">
      <h1 class="display-4">Not Sure What To Read?</h1>
      <p class="lead">My Next Book will take all the indecision out of that decision. Browse our list of user-supplied books, get a random pick, or add some books of your own!</p>
    </div>
    <div class='d-flex'>
      <form class='border shadow-sm mr-2 p-5 w-50' method='POST' action="/books">
        @csrf
        <h2>Add a book to the collection!</h2>
        <input 
          class="form-group form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" 
          type="text" 
          name='title' 
          placeholder='Title'
          value="{{ old('title') }}"
          required>
        <input 
          class="form-group form-control {{ $errors->has('author') ? 'is-invalid' : ''}}" 
          type="text" 
          name='author' 
          placeholder='Author' 
          value="{{ old('author') }}"
          required>
        <input 
          class="form-group form-control {{ $errors->has('genre') ? 'is-invalid' : ''}}" 
          type="text" 
          name='genre' 
          placeholder='Genre'
          value="{{ old('genre') }}" 
          required>
        <input 
          class="form-group form-control {{ $errors->has('recommended') ? 'is-invalid' : ''}}" 
          type="text" 
          name='recommended' 
          placeholder='Submitted by'
          id='recommended'
          value="{{ old('recommended') }}"
          >
        <div class='form-group form-check'>
          <input 
            class='form-check-input'
            type="checkbox"
            id='check1'>
          <label 
            class=form-check-label
            for='check1'>Check if you'd like to remain anonymous
          </label>
          <script>
            document.getElementById('check1').onchange = function() {
              document.getElementById('recommended').disabled = this.checked;
            }
          </script>
        </div>
        <button 
          class='btn btn-primary' 
          type='btn'>Add Book
        </button>
        @if ($errors->any())
        <div>
          @foreach ($errors->all() as $error)
            <div 
              class='alert alert-danger' 
              role='alert'>{{ $error }}
            </div>
          @endforeach
        </div>
        @endif
      </form>
      <div class='ml-2 w-50 p-5 border shadow-sm d-flex flex-wrap'>
        <h2><a href='/books' class='text-decoration-none text-reset'>Browse All Books</a></h2>
        <div>
          <a href='/books'>
            <img 
              class='img-fluid img-thumbnail w-25 m-3' 
              src="https://images-na.ssl-images-amazon.com/images/I/51NtyVHtAmL._SX307_BO1,204,203,200_.jpg" 
              alt="good omens">
          </a>
          <a href='/books'>
            <img 
              class='img-fluid img-thumbnail w-25 m-3' 
              src="https://images-na.ssl-images-amazon.com/images/I/91b8oNwaV1L.jpg" 
              alt="name of the wind">
          </a>
          <a href='/books'>
            <img 
              class='img-fluid img-thumbnail w-25 m-3' 
              src="https://images-na.ssl-images-amazon.com/images/I/81tZufOGaZL.jpg" 
              alt="red rising">
          </a>
          <a href='/books'>
            <img 
              class='img-fluid img-thumbnail w-25 m-3' 
              src="http://aidanmoher.com/blog/wp-content/uploads/2010/11/leviathan-wakes-james-sa-corey.jpeg" 
              alt="leviathan wakes">
          </a>
          <a href='/books'>
            <img 
              class='img-fluid img-thumbnail w-25 m-3' 
              src="https://images-na.ssl-images-amazon.com/images/I/51uLvJlKpNL._SX321_BO1,204,203,200_.jpg" 
              alt="the hobbit">
          </a>
          <a href='/books'>
            <img 
              class='img-fluid img-thumbnail w-25 m-3' 
              src="https://images-na.ssl-images-amazon.com/images/I/91dSMhdIzTL.jpg" 
              alt="game of thrones">
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection