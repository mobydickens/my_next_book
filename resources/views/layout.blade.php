<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Next Book</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
      * {
        margin:0;
        padding: 0;
        box-sizing: border-box;
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
      }
      .header {
        display: flex;
        justify-content: center;
        background-color: #0080FF;
        height: 80px;       
        padding: 10px;
      }
      .all-links {
        display: flex;
      }
      .links {
        text-decoration: none;
        background-color: #0080FF;
        color: white;
        padding: 30px 40px 0 40px;
        font-size: 20px;
      }
      .header-title {
        font-size: 50px;
        padding-top: 0;
      }
      .container {
        margin: 10px;
      }
      .book-box {
        border: 1px solid black;
      }
      
    </style>
  </head>

  <body>
    <div class='header'>
      <a class='links' href="/books">Books</a>
      <a class='header-title links' href='/'>My Next Book</a>
      <a class='links' href='/about'>About</a>
    </div>
    
    @yield('content')
  </body>
</html>
