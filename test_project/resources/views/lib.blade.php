<html>
    <head>
      <title>SmartData</title>
    </head>
    <body>
        <div>Добро пожаловать в библиотеку SmartData <a href="/index">Home</a> <a href="/admin">Admin</a>
        <a href="/lib">Lib</a></div>
        <hr>
        @foreach($books as $book)
          книга {{ $book->name }} <br>
          автор книги {{ $book->id }}
        @endforeach
    </body>
</html>