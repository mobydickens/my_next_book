<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
  public function index() 
  {
    $books = Book::all();
    return view('books.index', compact('books'));
  }

  public function store(Book $book) 
  {
    $book->create(request(['title', 'author', 'genre', 'recommended']));
    return redirect('/books');
  }

  public function show(Book $book) 
  {
    return view('books.show', compact('book'));
  }

  public function edit(Book $book) 
  {
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
 