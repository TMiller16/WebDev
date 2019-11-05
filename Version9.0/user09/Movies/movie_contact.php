<html>
<head>

       
<style>
    body {
        background: #1a2426;
    }
    </style>
    <title>Contact</title>
    </head>

<body>
    
    
<body>
    <center><font color = "white"><h1>Contact Page</h1></font></center> 
<font color="white">
    <h3>Menu</h3>
    </font>
 <button><li><a href="http://127.0.0.1:8080/movies/index.php">Home</a></li></button>
  <button><li><a href="http://127.0.0.1:8080/movies/movie_search.php">Movie Search</a></li></button>
     <button><li><a href="http://127.0.0.1:8080/movies/moviegame/movie_game.php">Game</a></li></button>
    <button><li><a href="http://127.0.0.1:8080/movies/movie_weather.php">Weather</a></li></button>
    <button><li><a href="http://127.0.0.1:8080/movies/movie_contact.php">contact</a></li></button>

    <body>
<dl>
	
	<dt>Phone number</dt>
	<dd>612-747-7474</dd>
	<dt>email address</dt>
	<dd>millermovies@gmail.com</dd>
	<dt>address</dt>
	<dd>200 parklion drive</dd>
	
</dl>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>

(function() {
	
	$('dd').filter(':nth-child(n+4)').addClass('hide');

	$('dl').on('mouseenter', 'dt', function() {
		$(this)
			.next()
				.slideDown(200)
				.siblings('dd')
					.slideUp(200);
	});
})();


</script>




    
    
</body>
    <style>
    body {
        width:200px;
    
        margin: auto;
        text-align border-left: ;
    }
        dl {
            
        }
        dd{
            margin: 0;
            
            padding: 1em 0;
            
        }
        dt {
            
            cursor: pointer;
            font-weight: bold;
            font-size: 1.5em;
            line-height: 2em;
            background: #e3e3e3;
            border-bottom: 1px solid #c5c5c5;
            border-top: 1px solid white;
            
        
        }    
    
    
    </style>

</html>