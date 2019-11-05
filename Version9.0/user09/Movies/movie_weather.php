<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App - JavaScript</title>
    <link rel="stylesheet" href="font/Rimouski.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <font color="white">
    <h3>Menu</h3>
    </font>
 <button><li><a href="http://127.0.0.1:8080/movies/index.php">Home</a></li></button>
  <button><li><a href="http://127.0.0.1:8080/movies/movie_search.php">Movie Search</a></li></button>
     <button><li><a href="http://127.0.0.1:8080/movies/moviegame/movie_game.php">Game</a></li></button>
    <button><li><a href="http://127.0.0.1:8080/movies/movie_weather.php">Weather</a></li></button>
    <button><li><a href="http://127.0.0.1:8080/movies/movie_contact.php">contact</a></li></button>
    
    <br>
    <br>
    <br>
    
    <div class="container">
        <div class="app-title">
            <p>Weather</p>
        </div>
        <div class="notification"> </div>
        <div class="weather-container">
            <div class="weather-icon">
                <img src="icons/unknown.png" alt="">
            </div>
            <div class="temperature-value">
                <p>- °<span>C</span></p>
            </div>
            <div class="temperature-description">
                <p> - </p>
            </div>
            <div class="location">
                <p>-</p>
            </div>
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>


