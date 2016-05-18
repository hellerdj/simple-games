<?php

$victoryWords = array (
			'scissors' => array('paper' => 'cuts', 'lizard' => 'decapitates'),
			'paper' => array('rock' => 'covers', 'spock' => 'disproves'),
			'rock'  => array('lizard' => 'crushes', 'scissors' => 'crushes'),
			'lizard' => array('spock' => 'poisons', 'paper' => 'eats'),
			'spock' => array('scissors' => 'smashes', 'rock' => 'vaporizes')
			);
			
// "It is very simple. Scissors cuts paper. Paper covers rock. Rock crushes lizard. 
// Lizard poisons Spock. Spock smashes scissors. Scissors decapitates lizard. Lizard eats paper.
//  Paper disproves Spock. Spock vaporizes rock. And as it always has, rock crushes scissors." 
			

$array = array('rock', 'paper', 'scissors', 'lizard', 'spock');

$computerMove = $array[rand(0,4)];


if(!(isset($_GET['userThrow'])) ) {
$humanMove = "";
}
else {
$humanMove = $_GET['userThrow'];
}
$result = ""; 	
$winner = "";
$loser = "";


// Test output 
// echo compareMoves($humanMove, $computerMove);
// echo "$humanMove <br/>";
// echo "$computerMove <br/>";

if ( (isset($_GET['userThrow'])) && 
	compareMoves($humanMove, $computerMove) == "human"){
// 		Human Winner
		echo "<div class='container-fluid'>";
    	echo 	"<div class='row  text-center'>";
		echo 		"<div class='col-md-3  bg-success'>";
		echo 			"<h3>Human</h3>";
		echo 		"</div>";
		echo 		"<div class='col-md-3'>";
		echo 			"<h3></h3>";
		echo 		"</div>";
		echo 		"<div class='col-md-3 bg-danger'>";
		echo 			"<h3>Computer</h3>";
		echo 		"</div>";
		echo 	"</div>";
	    echo "</div>"; 
		
		// Append a Human's move to the file
		echo "<div class='container-fluid'>";
		echo 	"<div class='row text-center'>";
    	echo 		"<div class='col-md-3 bg-success text-primary'>";
    	echo 			"<h3> $humanMove </h3>";
    	echo 		"</div>";
    	echo 		"<div class='col-md-3'>";
    	echo 			"<h2>{$victoryWords[$humanMove][$computerMove]}</h2>";
    	echo		"</div>";
    	
    	    	
    	// Add Computer's Choice to the file
	    echo 		"<div class='col-md-3 bg-danger text-primary'>";
    	echo 			"<h3> $computerMove </h3>";
    	echo 		"</div>";
    	
    	echo 	"</div>";
    	echo "</div>";   	
}
    	
    	if ( (isset($_GET['userThrow'])) && 
    		compareMoves($humanMove, $computerMove) == "computer"){
    	// Computer winner
		echo "<div class='container-fluid'>";
    	echo 	"<div class='row text-center'>";
		echo 		"<div class='col-md-3 bg-success'>";
		echo 			"<h3>Computer</h3>";
		echo 		"</div>";
		echo 		"<div class='col-md-3'>";
		echo 			"<h3></h3>";
		echo 		"</div>";
		echo 		"<div class='col-md-3 bg-danger'>";
		echo 			"<h3>Human</h3>";
		echo 		"</div>";
		echo 	"</div>";
	    echo "</div>"; 
		
		// Append a Computer's move to the file
		echo "<div class='container-fluid'>";
		echo 	"<div class='row text-center'>";
    	echo 		"<div class='col-md-3 bg-success text-primary'>";
    	echo 			"<h3> $computerMove </h3>";
    	echo 		"</div>";
    	echo 		"<div class='col-md-3'>";
    	echo 			"<h2>{$victoryWords[$computerMove][$humanMove]}</h2>";
    	echo		"</div>";
    	
    	    	
    	// Add Human's Choice to the file
	    echo 		"<div class='col-md-3 bg-danger text-primary'>";
    	echo 			"<h3> $humanMove </h3>";
    	echo 		"</div>";
    	
    	echo 	"</div>";
    	echo "</div>";

    	}
    	if ( (isset($_GET['userThrow'])) && 
    		compareMoves($humanMove, $computerMove) == "tie"){ 
    	echo "<div class='container-fluid  text-center bg-warning'>";
    	echo 	"<h3> It's a tie </h3>";
    	echo "</div>";
    	}
    	


    	
    

function compareMoves($humanMove, $computerMove) {
global $result;

    $result = array('rock'  => array('rock' => 'tie', 
    								'paper' => 'computer', 
    								'scissors' => 'human',
    								'lizard' => 'human', 
    								'spock' => 'computer'), 
    								
                    'paper' => array('rock' => 'human',
                    				 'paper' => 'tie', 
                    				 'scissors' => 'computer', 
                    				'lizard' => 'computer', 
    								'spock' => 'human'), 
                    'scissors' => array('rock' => 'computer', 
                    					'paper' => 'human', 
                    					'scissors' => 'tie',
                    					'lizard' => 'human',
                    					'spock' => 'computer'),
                    'lizard' =>  array( 'rock' => 'computer', 
    								'paper' => 'human', 
    								'scissors' => 'computer',
    								'lizard' => 'tie', 
    								'spock' => 'human'), 
                    'spock' => array('rock' => 'human', 
    								'paper' => 'computer', 
    								'scissors' => 'human',
    								'lizard' => 'computer', 
    								'spock' => 'tie')

                   );
    
                   
                   
                   
// "It is very simple. Scissors cuts paper. Paper covers rock. Rock crushes lizard. 
// Lizard poisons Spock. Spock smashes scissors. Scissors decapitates lizard. Lizard eats paper.
//  Paper disproves Spock. Spock vaporizes rock. And as it always has, rock crushes scissors." 
if(!(isset($_GET['userThrow'])) ) {
$humanMove = "";
}
else {
    return $result[$humanMove][$computerMove];
}

		
} 

?>