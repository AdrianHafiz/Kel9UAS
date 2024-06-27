<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Truman Show</title>
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
    <h2>The Truman Show</h2>
    <div class="container">
        <a href="#!"><img class="gambar" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.IVe8pvyzu-qs4szBshJSEAHaLH%26pid%3DApi&f=1&ipt=0e05fe54a75e12225b36d22864372f56ba0ffe2d3d40fb5b6a8e3320604cf376&ipo=images" alt="The Truman Show" /></a>
        <div class="content">
            <p class="tulis">He doesn't know it, but everything in Truman Burbank's (Jim Carrey) life is part of a massive TV set. Executive producer Christof (Ed Harris) orchestrates "The Truman Show," a live broadcast of Truman's every move captured by hidden cameras. Cristof tries to control Truman's mind, even removing his true love, Sylvia (Natascha McElhone), from the show and replacing her with Meryl (Laura Linney). As Truman gradually discovers the truth, however, he must decide whether to act on it.</p>
            <p class="dir">Director: Peter Weir</p>
            <p class="write">Writers: Andrew Niccol</p>
            <p class="stars">Stars: Jim Carrey | Ed Harris | Laura Linney</p>
            <hr>
            <div class="container mt-5">
                <div class="review-container">
                    <h4>Rate this movie</h4>
                    <form action="{{ route('ratings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="movie_id" value="3"> <!-- Pastikan ID film sesuai -->
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
                    @if($movie = App\Models\Movie::find(3))
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
