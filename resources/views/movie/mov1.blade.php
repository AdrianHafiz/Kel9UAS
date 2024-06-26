<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterStellar</title>
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
        <img class="gambar" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/297acd129204217.616629e21fe76.png" alt="Interstellar">
        <div class="content">
            <h2>InterStellar</h2>
            <p class="tulis">In Earth's future, a global crop blight and second Dust Bowl are slowly rendering the planet uninhabitable. Professor Brand (Michael Caine), a brilliant NASA physicist, is working on plans to save mankind by transporting Earth's population to a new home via a wormhole. But first, Brand must send former NASA pilot Cooper (Matthew McConaughey) and a team of researchers through the wormhole and across the galaxy to find out which of three planets could be mankind's new home.</p>
            <p class="dir">Director: Christopher Nolan</p>
            <p class="write">Writers: Christopher Nolan | Jonathan Nolan </p>
            <p class="stars">Stars: Matthew McConaughey | Anne Hathaway | Jessica Chastain</p>
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
</body>
</html>
