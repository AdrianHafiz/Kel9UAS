<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <p><strong>Director:</strong> {{ $movie->director }}</p>
        <p><strong>Cast:</strong> {{ $movie->cast }}</p>
        <p><strong>Genre:</strong> {{ $movie->genre }}</p>
        <p><strong>Rating:</strong> {{ $movie->rating }}</p>
        <p>{{ $movie->description }}</p>
        <a href="{{ url('/') }}">Back to Movies</a>
    </div>
</body>
</html>
