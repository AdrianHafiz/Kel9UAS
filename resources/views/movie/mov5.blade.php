<html>
<head>
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
    <h2>Hacksaw Ridge</h2>
    <div class="container">
        <a href="#!"><img class="gambar" src="https://wallpapercave.com/wp/wp11264783.jpg" alt="Hacksaw Ridge" /></a>
        <div class="content">
            <p class="tulis">The true story of Pfc. Desmond T. Doss (Andrew Garfield), who won the Congressional Medal of Honor despite refusing to bear arms during WWII on religious grounds. Doss was drafted and ostracized by fellow soldiers for his pacifist stance but went on to earn respect and adoration for his bravery, selflessness and compassion after he risked his life -- without firing a shot -- to save 75 men in the Battle of Okinawa.</p>
            <p class="dir">Director: Mel Gibson</p>
            <p class="write">Writers: Robert Schenkkan | Andrew Knight</p>
            <p class="stars"> Stars: Andrew Garfield | Sam Worthington | Luke Bracey </p>
            <hr>
        <div class="container mt-5">
        <div class="review-container">
            <h4>Rate this movie</h4>
            <form action="{{ route('ratings.store') }}" method="POST">
                @csrf
                <input type="hidden" name="film_id" value="1">
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
                <textarea name="review" placeholder="write a review" rows="4"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
