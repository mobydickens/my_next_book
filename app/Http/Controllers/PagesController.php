<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home() 
  {
    $books = [
      'Lolita',
      'Chalice',
      'Wide Sargasso Sea'
    ];
    return view('home', ['books' => $books] );
  }
  public function about() 
  {
    return view('about');
  }
}
