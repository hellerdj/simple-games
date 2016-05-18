var playerUp = "X";
var gameOn = true;
var computerOpponent = true;

function $(id) {
    return document.getElementById(id);
}

function makeMove(ele) {
    if (gameOn) {
        if (ele.innerHTML == "") {
            ele.innerHTML = playerUp;
            checkForWin();
            if (playerUp === "X") {
                playerUp = "O";
                if (computerOpponent && gameOn) {
                    makeMove(computerChoice());
                    playerUp = "X";
                }
            } else {
                playerUp = "X";
            }
        } else {
            alert("You can't make a move there.");
        }
    } else {
        alert("Game Over - you cannot make any more moves");
    }
}

function checkForWin() {
    var chk = new Array();
    var anyEmpty = false;

	// Rows Across
    chk[0] = $("c0r0").innerHTML + $("c1r0").innerHTML + $("c2r0").innerHTML;
    chk[1] = $("c0r1").innerHTML + $("c1r1").innerHTML + $("c2r1").innerHTML;
    chk[2] = $("c0r2").innerHTML + $("c1r2").innerHTML + $("c2r2").innerHTML;

	// Columns Down
    chk[3] = $("c0r0").innerHTML + $("c0r1").innerHTML + $("c0r2").innerHTML;
    chk[4] = $("c1r0").innerHTML + $("c1r1").innerHTML + $("c1r2").innerHTML;
    chk[5] = $("c2r0").innerHTML + $("c2r1").innerHTML + $("c2r2").innerHTML;

	// Diagonals
    chk[6] = $("c0r0").innerHTML + $("c1r1").innerHTML + $("c2r2").innerHTML;
    chk[7] = $("c2r0").innerHTML + $("c1r1").innerHTML + $("c0r2").innerHTML;

    for (var i = 0; i < 8; i++) {
        if (chk[i].length < 3)
            anyEmpty = true;
        if(chk[i] === "XXX" || chk[i] === "OOO") {
            gameOn = false;
            alert("Player " + playerUp + " is the winner!");
            increaseScore();
        }
    }

    if (anyEmpty === false && gameOn === true) {
        gameOn = false;
        alert("It's a tie");
    }
}

function resetGame() {
	$("c0r0").innerHTML = "";
	$("c0r1").innerHTML = "";
	$("c0r2").innerHTML = "";
	$("c1r0").innerHTML = "";
	$("c1r1").innerHTML = "";
	$("c1r2").innerHTML = "";
	$("c2r0").innerHTML = "";
	$("c2r1").innerHTML = "";
	$("c2r2").innerHTML = "";
	gameOn = true; 
	playerUp = "X";

}

function increaseScore() {
	if (playerUp == "X")
		$("playerXScore").innerHTML++;
	if (playerUp == "O")
		$("playerOScore").innerHTML++; 
}

function computerChoice() {
   var chk = [ 
		[ "c0r0", "c1r0", "c2r0" ],
		[ "c0r1", "c1r1", "c2r1" ],
		[ "c0r2", "c1r2", "c2r2" ],
		[ "c0r0", "c0r1", "c0r2" ],
		[ "c1r0", "c1r1", "c1r2" ],
		[ "c2r0", "c2r1", "c2r2" ],
		[ "c0r0", "c1r1", "c2r2" ],
		[ "c2r0", "c1r1", "c0r2" ],
	];
	var counterO;
	var counterX;
	var choice;
	
	//winning moves
	for (var i = 0; i < chk.length; i++) {
		counterO = choice = 0;
		for (var j = 0; j < chk[i].length; j++) {
			if ($(chk[i][j]).innerHTML == "O")
				counterO++;
			if ($(chk[i][j]).innerHTML == "")
				choice = $(chk[i][j]);
		}
		if (counterO == 2 && choice != 0)
			return choice;
	}
	
	//blocking moves
	for (var i = 0; i < chk.length; i++) {
		counterX = choice = 0;
		for (var j = 0; j < chk[i].length; j++) {
			if ($(chk[i][j]).innerHTML == "X")
				counterX++;
			if ($(chk[i][j]).innerHTML == "")
				choice = $(chk[i][j]);
		}
		if (counterX == 2 && choice != 0)
			return choice;
	}
	do {
		var choice = $ (chk[Math.floor((Math.random()*8)+0)][Math.floor((Math.random()*3)+0)]);
	} while (choice.innerHTML == "X" || choice.innerHTML == "O");
	return choice;  


    
    
}
