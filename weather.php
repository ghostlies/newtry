<?php
error_reporting(E_ALL); // Error checking
ini_set('display_errors', 1);
?>
<style>
<?php
include 'css/weather.css'; // Reference to file
?>
</style>

<!DOCTYPE html>
<html lang="en"> <!--Language is english-->
<head> <!--Head-->
    <meta charset="UTF-8"> <!--Allows æøå-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Viewport-->
    <link rel="stylesheet" href="css/weather.css"> <!--To be sure-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"> <!--Being able to use icons-->
    <title>Weather</title> <!--Window title-->
</head>
<body> <!--Body-->
    <header>
        <nav> <!--Navigation-->
            <a href="home.php">Home</a>
            <a href="#" class="active">Weather</a>
            <a href="learn.php">Learn</a>
            <a href="#" class="menu">Menu</a>
        </nav>
    </header>
    <main>
        <div class="container"> <!--Making a search box-->
            <div class="search-box">
                <i class="bx bxs-map"></i>
                <input type="text" placeholder="Enter your location">
                <button class="bx bx-search"></button> <!--Button is a search icon-->
            </div>

            <p class="city-hide">city hide</p>

            <div class="weather-box">
                <div class="box">
                    <div class="info-weather">
                        <div class="weather">
                            <img src="../images/cloud.png" alt="">
                            <p class="temperature">0<span>°C</span></p>
                            <p class="description">Broken Clouds</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weather-details">
                <div class="humidity">
                    <i class='bx bx-water'></i>
                    <div class="text">
                        <div class="info-humidity">
                            <span>0%</span>
                        </div>
                        <p>Humidity</p>
                    </div>
                </div>
                <div class="wind">
                    <i class='bx bx-wind'></i>
                    <div class="text">
                        <div class="info-wind">
                            <span>0km/h</span>
                        </div>
                        <p>Wind Speed</p>
                    </div>
                </div>
            </div>
            <div class="not-found">
                <div class="box">
                    <img src="js/images/404.png" alt="">
                    <p>Oops! Location not found!</p>
                </div>
            </div>
        </div>
        <script src="js/weather.js"></script>
    </main>
</body>
</html>
<!--End code-->
