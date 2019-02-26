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
  public function store() 
  {
    $book = new Book();
    $book->title = request('title');
    $book->author = request('author');
    $book->genre = request('genre');
    $book->recommended = request('recommended');
    $book->save();
    return redirect('/books');
  }
  public function edit($id) 
  {
    $book = Book::find($id);
    return view('books.edit', compact('book'));
  }
  public function update($id) 
  {
    $book = Book::find($id);
    $book->title = request('title');
    $book->author = request('author');
    $book->genre = request('genre');
    $book->recommended = request('recommended');
    $book->save();
    return redirect('/books');
  }
}
 