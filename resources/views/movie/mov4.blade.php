<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life of Pi</title>
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
    <h2>Life of Pi</h2>
    <div class="container">
        <a href="#!"><img class="gambar" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f75158fe-c94d-42a9-a954-285bd0abbc36/d5vtufq-98759060-509a-4302-9db3-27e5bc5750f9.png/v1/fill/w_1024,h_1449,q_80,strp/life_of_pi___a4_movie_poster_by_jswoodhams_d5vtufq-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTQ0OSIsInBhdGgiOiJcL2ZcL2Y3NTE1OGZlLWM5NGQtNDJhOS1hOTU0LTI4NWJkMGFiYmMzNlwvZDV2dHVmcS05ODc1OTA2MC01MDlhLTQzMDItOWRiMy0yN2U1YmM1NzUwZjkucG5nIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.i2FDzmTBtNooO-vmHIvqkTukqyx_t4h1zY-JXsYuuus" alt="Life Of PI" /></a>
        <div class="content">
            <p class="tulis">After deciding to sell their zoo in India and move to Canada, Santosh and Gita Patel board a freighter with their sons and some animals. A storm sinks the ship, leaving their teenage son, Pi as the sole human survivor.</p>
            <p class="dir">Director: Ang Lee</p>
            <p class="write">Writers: Yaan Martel | David Magee</p>
            <p class="stars">Stars: Suraj Sharma | Irrfan Khan | Adil Hussain</p>
            <hr>
            <div class="container mt-5">
                <div class="review-container">
                    <h4>Rate this movie</h4>
                    <form action="{{ route('ratings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="movie_id" value="4"> <!-- Pastikan ID film sesuai -->
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
                    @if($movie = App\Models\Movie::find(4))
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