<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<body>
    <h1>Library Books</h1>

    <form action="/books" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br><br>

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required><br><br>

        <button type="submit">Add Book</button>

        <h2>Book List</h2>
        <ul>
            @foreach($books as $book)
                <li>{{ $book->title }} by {{ $book->author }} (ISBN: {{ $book->isbn }})</li>
            @endforeach
    </form>
</body>
</html>