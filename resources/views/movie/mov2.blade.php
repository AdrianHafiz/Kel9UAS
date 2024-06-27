<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forrest Gump</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            align-items: flex-start;
        }
        .gambar {
            width: 350px;
            height: auto;
            margin-right: 20px;
        }
        .content {
            flex: 1;
        }
        .content p {
            margin: 0 0 10px;
        }
        .dir, .write {
            margin-top: 10px;
        }

        .star-rating {
            direction: rtl;
            display: inline-flex;
        }
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            font-size: 2em;
            color: lightgray;
            cursor: pointer;
        }
        .star-rating input[type="radio"]:checked ~ label {
            color: gold;
        }
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: gold;
        }
        .review-container {
            max-width: 300px;
            margin: auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .review-container textarea {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
        }
        .review-container button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="gambar" src="https://www.petersbilliards.com/images/jcogs_img/cache/forrest-gump-movie-poster_-_28de80_-_05eceabacb1dc8673d4f4daff4ac77d09b282167.jpg" alt="Forrest Gump">
        <div class="content">
            <h2>Forrest Gump</h2>
            <p class="tulis">Forrest, a man with low IQ, recounts the early years of his life when he found himself in the middle of key historical events. All he wants now is to be reunited with his childhood sweetheart, Jenny.</p>
            <p class="dir">Director: Robert Zemeckis</p>
            <p class="write">Writers: Winston Groom, Eric Roth</p>
            <p class="stars">Stars: Tom Hanks, Robin Wright, Gary Sinise</p>
            <hr>
            <div class="container mt-5">
                <div class="review-container">
                    <h4>Rate this movie</h4>
                    <form action="{{ route('ratings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="movie_id" value="2">
                        <div class="star-rating">
                            <input type="radio" id="rating5" name="rating" value="5">
                            <label for="rating5">★</label>
                            <input type="radio" id="rating4" name="rating" value="4">
                            <label for="rating4">★</label>
                            <input type="radio" id="rating3" name="rating" value="3">
                            <label for="rating3">★</label>
                            <input type="radio" id="rating2" name="rating" value="2">
                            <label for="rating2">★</label>
                            <input type="radio" id="rating1" name="rating" value="1">
                            <label for="rating1">★</label>
                        </div>
                        <textarea name="review" placeholder="Write a review" rows="4"></textarea>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- Bagian untuk menampilkan rating dan review -->
                <div class="mt-4">
                    <h4>Reviews</h4>
                    @if($movie = App\Models\Movie::find(1))
                        @foreach($movie->ratings as $rating)
                            <div class="review">
                                <p><strong>Rating:</strong> {{ $rating->rating }} stars</p>
                                <p><strong>Review:</strong> {{ $rating->review }}</p>
                                <hr>
                            </div>
                        @endforeach
                    @else
                        <p>No reviews yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
