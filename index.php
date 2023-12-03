<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Showtime Select</title>
    <link rel="icon" type="image/png" href="img\sslogo.jpg">
</head>
<style>
    /* Trailers Section */

    .trailers-section > h1,
.trailers-section > h3 {
  padding: 0 10%;
}

.trailers-section > h1 {
  text-align: left;
  color: #6e5a11;
}

.trailers-section > h3 {
  text-align: left;
  color: #969696;
}

.trailers-section > h3:after {
  content: "";
  display: block;
  height: 3px;
  width: 7%;
  background: #6e5a11;
  position: relative;
  bottom: -10px;
}

.trailers-grid {
  margin: 60px 0;
  display: grid;
  grid-template-columns: auto auto auto;
  height: 80vh;
}

.trailers-grid-item {
  font-size: 30px;
  text-align: center;
  overflow: hidden;
  width: 100%;
  height: 100%;
  position: relative;
  vertical-align: middle;
}

.trailer-item-video {
  width: 100%;
  height: 100%;
}

.trailers-grid-item img {
  width: 100%;
  height: 100%;
  margin: 10px;
  display: block;
  border: 1px solid black; 
}

.trailer-item-info {
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
  width: 100%;
  height: 100%;
  margin: auto;
  z-index: 10;
  vertical-align: middle;
  opacity: 0;
  transition: 0.7s ease;
  background-color: rgb(0, 0, 0);
  padding: 85px 0;
}

.trailer-item-info:hover {
  opacity: 0.8;
}

.trailer-item-info h3 {
  vertical-align: middle;
  color: rgb(255, 255, 255);
}

.trailer-item-info i {
  margin: 10px;
  color: rgb(255, 255, 255);
  cursor: pointer;
  transition: all 0.2s ease;
}


    </style>
<style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .slideshow-container {
            max-width: 1200px; 
            position: relative;
            margin: auto;
        }

        .slide {
            display: none;
        }

        img {
            width: 100%; 
        }

        .fade {
            animation:  2s ease-in-out infinite;
        }

        @keyframes fade {
            from {
                opacity: .4;
            }
            to {
                opacity: 1;
            }
        }

       
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            cursor: pointer;
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }
    </style>
<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "cinema_db");
    $sql = "SELECT * FROM movieTable";
    ?>
    <header></header>



   
    <title>Movie Ticket Slideshow</title>
</head>
<body>
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="img/tiger1.jpg" alt="Movie Ticket 1">
        </div>
        <div class="slide fade">
            <img src="img/marvel.jpg" alt="Movie Ticket 2">
        </div>
        <div class="slide fade">
            <img src="img/japan1.jpg" alt="Movie Ticket 3">
        </div>

        <!-- Navigation buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <script>
        let slideIndex = 0;

        function showSlides() {
            let slides = document.getElementsByClassName("slide");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change slide every 2 seconds
        }

        // Function to navigate to the previous or next slide
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Initial call to start the slideshow
        showSlides();
    </script>





    
    <div id="home-section-1" class="movie-show-container">
        <h1>Currently Showing</h1>
        <h3>Book a movie now</h3>
        <div>
    
        </div>
        <div class="movies-container">

            <?php
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    for ($i = 0; $i <= 5; $i++) {
                        $row = mysqli_fetch_array($result);
                        echo '<div class="movie-box">';
                        echo '<img src="' . $row['movieImg'] . '" alt=" ">';
                        echo '<div class="movie-info ">';
                        echo '<h3>' . $row['movieTitle'] . '</h3>';
                        echo '</div>';
                        echo '</div>';
                    }
                    mysqli_free_result($result);
                } else {
                    echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }

            // Close connection
            mysqli_close($link);
            ?>
        </div>
    </div>








    
    <div id="home-section-2" class="services-section">
        <h1>How it works</h1>
        <h3>3 Simple steps to book your favourit movie!</h3>
        
        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Choose your favourite movie</h2></div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Pay for your tickets</h2></div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Pick your seats & Enjoy watching</h2></div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    </div>
    <div id="home-section-3" class="trailers-section">
        <h1 class="section-title">Explore New Movies</h1>
        <h3>Now Showing Cinema Trailers</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img\leo-1.jpg" alt="">
                <div class="trailer-item-info" data-video="ozRCVFgsrbY">
                    <h3>Leo</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img\ravi-1.jpg" alt="">
                <div class="trailer-item-info" data-video="CdwIA8ZBksQ">
                    <h3>Tiger nageswar Rao</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/bala-1.jpg" alt="">
                <div class="trailer-item-info" data-video="00mFeykBgVM">
                    <h3>Bhagavanth Kesari</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/japan.jpg" alt="">
                <div class="trailer-item-info" data-video="KPIc95pk4HY">
                    <h3>Japan</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/keda.jpg" alt="">
                <div class="trailer-item-info" data-video="OLju-cMjgco">
                    <h3>Keedaa cola</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/tiger-3.jpg" alt="">
                <div class="trailer-item-info" data-video="vEjTUDjjU6A">
                    <h3>Tiger 3</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>