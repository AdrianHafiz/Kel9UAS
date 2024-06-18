<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotten Tomatoes Clone</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <ul>
            @foreach($movies as $movie)
                <li>
                    <a href="{{ url('/movies', $movie->id) }}">{{ $movie->title }}</a>
                    <p>Rating: {{ $movie->rating }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
