<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Insight</title>
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!"> Movie Review Website
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#test">Feedback</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Movie Insight</h1>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div id="inter" class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/297acd129204217.616629e21fe76.png" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">November 7, 2014</div>
                                <h2 class="card-title">Interstellar</h2>
                            <p class="card-text">In Earth's future, a global crop blight and second Dust Bowl are slowly rendering the planet uninhabitable. Professor Brand (Michael Caine), a brilliant NASA physicist, is working on plans to save mankind by transporting Earth's population to a new home via a wormhole. But first, Brand must send former NASA pilot Cooper (Matthew McConaughey) and a team of researchers through the wormhole and across the galaxy to find out which of three planets could be mankind's new home.</p>
                                    <a class="btn btn-primary" href="{{ route('movie.mov1') }}">Read more →</a>
                             </div>
                        </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div id="forrest" class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://www.petersbilliards.com/images/jcogs_img/cache/forrest-gump-movie-poster_-_28de80_-_05eceabacb1dc8673d4f4daff4ac77d09b282167.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">July 6, 1994</div>
                                    <h2 class="card-title h4">Forrest Gump</h2>
                                    <p class="card-text">Forrest, a man with low IQ, recounts the early years of his life when he found himself in the middle of key historical events. All he wants now is to be reunited with his childhood sweetheart, Jenny.</p>
                                    <a class="btn btn-primary" href="{{ route('movie.mov2') }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div id="truman" class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.IVe8pvyzu-qs4szBshJSEAHaLH%26pid%3DApi&f=1&ipt=0e05fe54a75e12225b36d22864372f56ba0ffe2d3d40fb5b6a8e3320604cf376&ipo=images" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">June 5, 1998</div>
                                    <h2 class="card-title h4">The Truman Show</h2>
                                    <p class="card-text">He doesn't know it, but everything in Truman Burbank's (Jim Carrey) life is part of a massive TV set. Executive producer Christof (Ed Harris) orchestrates "The Truman Show," a live broadcast of Truman's every move captured by hidden cameras. Cristof tries to control Truman's mind, even removing his true love, Sylvia (Natascha McElhone), from the show and replacing her with Meryl (Laura Linney). As Truman gradually discovers the truth, however, he must decide whether to act on it.</p>
                                    <a class="btn btn-primary" href="{{ route('movie.mov3') }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div id="pi" class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f75158fe-c94d-42a9-a954-285bd0abbc36/d5vtufq-98759060-509a-4302-9db3-27e5bc5750f9.png/v1/fill/w_1024,h_1449,q_80,strp/life_of_pi___a4_movie_poster_by_jswoodhams_d5vtufq-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTQ0OSIsInBhdGgiOiJcL2ZcL2Y3NTE1OGZlLWM5NGQtNDJhOS1hOTU0LTI4NWJkMGFiYmMzNlwvZDV2dHVmcS05ODc1OTA2MC01MDlhLTQzMDItOWRiMy0yN2U1YmM1NzUwZjkucG5nIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.i2FDzmTBtNooO-vmHIvqkTukqyx_t4h1zY-JXsYuuus" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">November 21, 2012</div>
                                    <h2 class="card-title h4">Life of Pi</h2>
                                    <p class="card-text">After deciding to sell their zoo in India and move to Canada, Santosh and Gita Patel board a freighter with their sons and some animals. A storm sinks the ship, leaving their teenage son, Pi as the sole human survivor.</p>
                                    <a class="btn btn-primary" href="{{ route('movie.mov4') }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div id="hack" class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://wallpapercave.com/wp/wp11264783.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">November 4, 2016</div>
                                    <h2 class="card-title h4">Hacksaw Ridge</h2>
                                    <p class="card-text">The true story of Pfc. Desmond T. Doss (Andrew Garfield), who won the Congressional Medal of Honor despite refusing to bear arms during WWII on religious grounds. Doss was drafted and ostracized by fellow soldiers for his pacifist stance but went on to earn respect and adoration for his bravery, selflessness and compassion after he risked his life -- without firing a shot -- to save 75 men in the Battle of Okinawa.<br><br></p>
                                    <a class="btn btn-primary" href="{{ route('movie.mov5') }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" name="search_term" placeholder="Enter something ..." aria-label="" aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Movies List</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                    <li><a href="#inter">Interstellar</a></li>
                                        <li><a href="#forrest">Forrest Gump</a></li>
                                        <li><a href="#pi">Life of Pi</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#truman">The Truman Show</a></li>
                                        <li><a href="#hack">Hacksaw Ridge</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div id="about" class="card mb-4">
                        <div class="card-header">About</div>
                        <div class="card-body">
                          Web ini disediakan untuk mereview film sesuai dengan keinginan anda. Berikan komen dan penilaian secara objektif.
                          Dapat menuliskan saran dan kritik di fitur komen.
                        </div>
                    </div>
                    <div id="blog" class="card mb-4">
                        <div class="card-header">Comments</div>
                        <div class="card-body"> <textarea id="feedback" name="feedback" style="width: 300px; height: 50px; border: 2px solid black; border-radius: 5px; color: black;"; placeholder="Leave a comment"></textarea><br><br></div>
                        <center><input type="submit" value="Send"></center><br>
                    </div>
            </div>
        </div>
    </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div id="test">
            <div class="container"><p class="m-0 text-center text-white"> Feedback<br>
            <form action="your-server-endpoint" method="post">
            <label for="feedback">Kesan dan Pesan</label><br>
          <center> <textarea id="feedback" name="feedback" style="width: 300px; height: 50px; background-color: #333;  border: 2px solid #fff; border-radius: 5px; color: #fff;"; placeholder="Kesan dan Pesan"></textarea><br><br> </center>
          <center>  <input type="submit" value="Send"> </center>
        </form>
            </p></div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
