<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
      .book-box {
        border: 1px solid black;
      }
      
    </style>
</head>
<body>
  <h1>Books</h1>

  @foreach ($books as $book)
    <div class='book-box'>
      <p>{{ $book->title }}</p>
      <p>{{ $book->author }}</p>
      <p>{{ $book->genre }}</p>
      <p>{{ $book->recommended }}</p>
    </div>
  @endforeach
</body>
</html>