<?php
error_reporting(E_ALL); // Error checking
ini_set('display_errors', 1);
?>
<style>
<?php
include 'css/home.css'; // Reference to file
?>
</style>

<!DOCTYPE html>
<html lang="en"> <!--Language is english-->
<head> <!--Head-->
    <meta charset="UTF-8"> <!--Allows æøå-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Viewport-->
    <link rel="stylesheet" href="css/home.css"> <!--Prob not needed, but hey safety first-->
    <title>Home</title> <!--Window title-->
</head>
<body> <!--Body-->
    <header>
        <nav> <!--Navigation-->
            <a href="#" class="active">Home</a>
            <a href="weather.php">Weather</a>
            <a href="learn.php">Learn</a>
            <a href="#" class="menu">Menu</a>
        </nav>
    </header>
    <main>
        <div id="main"> <!--Description-->
            <h1>Welcome!</h1>
            <h4>About</h4>
            <p>This website is built from HTML, CSS, JavaScript, PHP and MySQL inside phpMyAdmin. In my database, two tables are created which I've been uing for my Signup/Login and Learn pages. In the Weather tab you will be able to search for a specific location and find out the temperature, humidity and wind speed. In the Learn tab you will be able to recieve knowledge from both a data table and further down descriptions and characteristics.</p>
            <h4>PHP</h4>
            <p>Like I said, I have used PHP, which stands for Hypertext Preprocessor, and it is a widely-used open-source server-side scripting language primarily designed for web development. </p>
            <h4>MVC-model</h4>
            <p>I have also been using the MVC-model, which stands for Model, View, Controller, is a model which divides an application into Model (data), View (presentation), and Controller (logic). It separates concerns, enhancing maintainability, scalability, and testability, commonly used in web development frameworks.</p>
        </div>
    </main>
    <footer> <!--Footer with links-->
        <p>If you want to check out the weather in a certain location, click <a href="weather.php">here</a></p>
        <p>Want to learn something new?, click <a href="learn.php">here</a></p>
    </footer>
</body>
</html>
<!--End code-->
