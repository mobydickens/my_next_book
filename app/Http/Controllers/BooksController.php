<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->only(['store', 'edit', 'update', 'destroy']);
  }
  public function index() 
  {
    $books = Book::all();
    return view('books.index', compact('books'));
  }

  public function store(Book $book) 
  {
    $attributes = request()->validate([
      'title' => 'required',
      'author' => 'required',
      'genre' => 'required',
    ]);

    $attributes['recommended'] = request('recommended');

    $book->create($attributes + ['owner_id' => auth()->id() ]);
    return redirect('/books');
  }

  public function show(Book $book) 
  {
    return view('books.show', compact('book'));
  }

  public function edit(Book $book) 
  {
    abort_if($book->owner_id !== auth()->id(), 403);
    return view('books.edit', compact('book'));
  }

  public function update(Book $book) 
  {
    $book->update(request(['title', 'author', 'genre', 'recommended']));
    return redirect('/books');
  }

  public function destroy(Book $book) {
    $book->delete();
    return redirect('/books');
  }
}
 