<!-- Create array and make all values a smiley face. -->
<?php function tttArrayCreate() {
	for($i=1;$i<10;$i++){
	  $ttt_val_array = array("B$i" => "$i");
	  $z = $i-1;
	  $varname ="B$z";	
	  $$varname = $ttt_val_array[$z]['B$i'];
	  return $ttt_val_array;
	} 	
}  ?>



<?php function tttArrayCreate__2() {
	for($i=1;$i<10;$i++){
	  $ttt_val_array2[] = array("B$i" => "$i");
	  return $ttt_val_array2;
	} 	
}  ?>


<!-- Function to pick first turn. -->
<?php function firstTurn() {
	// Pick a 1 or 2 randomly.
	$rand_pick = rand(1,2);

	//Player O's turn.
	if ($rand_pick == 1) { 
		$current_turn="O"; 
		echo "Player " . $current_turn . ", it's your turn to choose.";
	}

	// Player X's turn.
	if ($rand_pick == 2) { 
		$current_turn="X"; 
		echo "Player " . $current_turn . ", it's your turn to choose.";
	}
	// return $current_turn;
} ?>



<!-- Function to pick the next turn. -->
<?php function nextTurn($current_turn) {
	//Player X's turn next.
	if ($current_turn == "X") {
		$next_turn = "O";
		echo "Player " . $next_turn . ", now it's your turn. Choose wisely!";
	}

	//Player O's turn next.
	if ($current_turn == "O") {
		$next_turn = "X";
		echo "Player " . $next_turn . ", now it's your turn. Choose wisely!";
	}
	// return $next_turn;
} ?>



