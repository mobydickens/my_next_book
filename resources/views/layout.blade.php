<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Next Book</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      /* .all-links {
        display: flex;
      } */
      .links {
        text-decoration: none;
        color: white;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class='navbar-brand links' href='/'>My Next Book</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"     data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class='collapse navbar-collapse bg-primary' id='navbarNavAltMarkup'>
        <div class='navbar-nav bg-primary'>
          <a class='nav-link nav-item' href='/books'>Books</a>
          <a class='nav-link nav-item' href='/about'>About</a>
        </div>
      </div>
    </nav>
    
    @yield('content')
  </body>
</html>
