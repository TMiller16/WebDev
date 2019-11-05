<!doctype html>
<html>
<head>
<meta charset=utf-8>
<title>Movie Magic</title>  
    <style>
        article {
            width: 800px;
            margin: auto;
            
        }    
        blockquote.co {
            float: right;
            background: #000000;
            font-size: 2em;
            width: 35%;
            text-align: center;
            
        }
      
    </style>

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Lobster">
    <link href="style.css" rel="stylesheet">
    
    
</head>
<html>
   

<body>
     
    <div id="header">
  <div class="inner"><img src="movieposter2.jpeg" ></div>
</div>
<div id="wrap">
 
</div>
    <style>
#header {
  width:100%;
  overflow:hidden; /* contain floats */
  height:200px;
}

.inner, #wrap {
  width:80%;
  margin:auto;
}
    </style>
    
    
     <font color = "white"><center><h1>Home</h1></center></font>
<font color="white">
    <h3>Menu</h3>
    </font>
 <button><li><a href="http://127.0.0.1:8080/movies/index.php">Home</a></li></button>
  <button><li><a href="http://127.0.0.1:8080/movies/movie_search.php">Movie Search</a></li></button>
     <button><li><a href="http://127.0.0.1:8080/movies/moviegame/movie_game.php">Game</a></li></button>
    <button><li><a href="http://127.0.0.1:8080/movies/movie_weather.php">Weather</a></li></button>
    <button><li><a href="http://127.0.0.1:8080/movies/movie_contact.php">contact</a></li></button>

    <body>
    
<font color="white">    
<article>
    <h1>Hello</h1>
    
    <p>And welcome to my Fun movie site where you can learn about me, fun facts about movies, a movie poster search and even play a movie trivia game!</p>
    
    <p>
        <span class=co>(About Me)</span> This is the part where i tell you all about myself. I am 16 years old and have loved to watch movies ever since i was a little child. I would find myself going to watch a new movie almost every other week (because i begged hard enough... sorry mom). Now, I work at that same movie theatre that i used to go to as a kid. Its gotten alot slower but its still fun with the great people that work there.
    </p>
<html> 
    <head> 
        <title>cell padding</title> 
        <style> 
            table, th, td { 
                border: 2px solid green; 
                text-align:center; 
            } 
            th, td { 
                padding: 20px; 
                background-color:none; 
            } 
              
            h1 { 
            color:green; 
            } 
        </style> 
    </head> 
    <body> 
        
        
        
        <center><h1>My Favorite Movies</h1></center>
        <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM top10";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>rank</th>";
                                        echo "<th>Movie Name</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['Rank'] . "</td>";
                                        echo "<td>" . $row['Movie Name'] . "</td>";
                             
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
         
          
        <h1>My Least Favorite Movies</h1>
        <table  style="width:100%"> 
            
        <tr> 
            <th>Rank</th> 
            <th>Movie Title</th>   
        </tr> 
        <tr> 
            <td>1</td> 
            <td>Frozen</td> 
        </tr> 
        <tr> 
            <td>2</td> 
            <td>Frozen</td> 
        </tr> 
        <tr> 
            <td>3</td> 
            <td>Frozen</td> 
        </tr> 
        </table> 
        
    </body>
  
    
    
    
</html>    
  <br>
    <br>
    <br>
    <br>

    <center><ol>
        <h3>recently watched movies</h3>
        <li>Countdown</li>
        <li>Joker</li>
        <li>IT</li>
    
    
    </ol>
        </center>
    <br>
    <br>
    <img src="galaxy.jpeg" width="150"
                    hights="150">
    
    <p>
        Did you know that chris pratt stole his gaurdians of the galaxy costume because he wanted to have it on hand just in case a sick child wanted to see star lord! What a nice caring guy. <span class=co>(Fun Movie Facts)</span>
    </p>
    <img src="gump.jpeg" width="150"
                    hights="150">
    <p>Also did you know that Tom Hanks in the movie forest gump decided not to be paid for the movie but instead to take percentage points. This ended up netting him over 40 million dollars.</p>
  
    <img src="joker.jpeg" width="125"
                    hights="125">
    <p>To prepare for the role of joker in the dark knight heath ledger hid away in a motel room for 6 weeks to seclude himself and get fully into the charecter of the joker and master his every tic and laugh.</p>
    <br>
    <br>
    <p>Want to see some more fun facts? visit this great website https://www.boredpanda.com/interesting-movie-facts/?utm_source=google&utm_medium=organic&utm_campaign=organic</p>
    </article>
        
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
    <script>
    
    (function() {

  
var co=$('article').find('span.co').each(function() {
        var $this = $(this);
        
        $('<blockquote></blockquote>', {
            class: 'co',
            text: $this.text()
            
        }).prependTo( $this.closest('p') );
        
    });
        
        
})();
    
    
    
    
    </script>
    </font>
    </body>
</html>