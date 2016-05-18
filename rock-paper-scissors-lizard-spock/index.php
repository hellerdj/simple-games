<?php
require("functions.php");

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Rock, Paper, Scissors, Lizard, Spock</title>
        <meta charset="utf-8">
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    </head>
    <body>

    
		<div class='container-fluid'>		    
    		<h1 class='jumbotron'> Rock, Paper, Scissors, Lizard, Spock</h1>
    	</div>
    	<form method="get">
			<div class='container-fluid'>
    			<button class="btn" type="submit">
    			<input type="image" src="rock.png" alt="Rock" name="userThrow" value="rock"><br/>
    			Rock</button>
    			<button class="btn" type="submit">
    			<input type="image" src="paper.png" alt="paper" name="userThrow" value="paper"><br/>
    			Paper</button>
    			<button class="btn" type="submit">
    			<input type="image" src="scissors.png" alt="scissors" name="userThrow" value="scissors"><br/>
    			Scissors</button>
    			<button class="btn" type="submit">
    			<input type="image" src="lizard.png" alt="lizard" name="userThrow" value="lizard"><br/>
    			Lizard</button>
				<button class="btn" type="submit">
    			<input type="image" src="spock.png" alt="spock" name="userThrow" value="spock"><br/>
    			Spock</button>
			</div>
		</form>
		    	<?PHP		
				?>
    	
<!--     	<HTML for winning outcome> -->


<!-- 		<HTML for losing outcome>  -->
    

    	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>
