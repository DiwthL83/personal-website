<!doctype html>
<html>
<title>Tic Tac Toe</title>
<?php $thisPage = "ttt-logic";?>
<link rel="stylesheet" type="text/css" href="style-ttt.css">

<?php  
$thisPage = "ttt-logic"; include("ttt-funcs.php");



// Call variables to display most recent state of game. 
	$ttt_pos_str = $_GET["ttt_pos_str"]; // The string variable showing the current state of the board.	
	$click = $_GET["click"]; // What grid box was clicked on the board.
	$turn_count = $_GET["turn_count"]; // Number of choices made so far.
	$whose_turn = $_GET["whose_turn"]; // Retains either an 'X' or 'O' depending on who made the choice.

	// Grabs the last person that chose and makes them the prev_turn value prior to the tttSwitchWhoseTurn function running and switch the whose_turn value to whose turn it should be currently.
	$prev_turn = $whose_turn;  
	$whois_x = $_GET["whois_x"];
	$whois_o = $_GET["whois_o"];

	$draw_count = $_GET["draw_count"]; // Number of tie games.
	$p1_score = $_GET["p1_score"]; // Number of Player 1 wins.
	$p2_score = $_GET["p2_score"]; // Number of Player 2 wins.



	// If this is a new game (i.e. nothing's been clicked), initialize board position string and the turn-related variables. Otherwise, return the most recent state of the game. 
	if ($ttt_pos_str == "") {
		$ttt_pos_str = "~~~~~~~~~";
		$turn_count = 1;
		$whose_turn = "O";
		$prev_turn = "X";
		$whois_o = tttWhoIsO($whois_o); // Will return a value of either Player1 or Player2.
		$whois_x = tttWhoIsX($whois_x); // Will return a value of either Player1 or Player2.
	} else {
		// Creates variable for most recent state of the board.
		$ttt_pos_str = tttChoicesMade($click, $ttt_pos_str, $whose_turn); 
		$whose_turn = tttSwitchWhoseTurn($whose_turn);
		$turn_count += 1; // Increment up the number of turns taken.
	}



	// After most recent state of the TTT board is established, check to see if there's a winner present. Game won't be able to continue once winner is determined or if a tie is determined since all links will be dead at this point. Form button will always be available to reset game and stats if the players so desire.

	//$prev_player = tttWhoWon($whose_turn, $whois_o, $whois_x);

	// Variable holds a value of either "X", "O", "draw", or "no winner" depending on the state of the game.
	$winner = tttWinnerEval($turn_count, $ttt_pos_str);

	// This variable created in order to output correct game message. This variable is used in the tttGameMsg function.
	$who_won = tttWhoWon($whose_turn, $whois_o, $whois_x);

	// Variable is created for usage in the tttGameMsg function.
	$player_id = tttWhosPlayer1_2($whose_turn, $whois_o, $whois_x);

	// Displays whose turn it is or whether a winner or draw has been determined.
	$game_msg=tttGameMsg($winner, $player_id, $whose_turn, $who_won, $prev_turn);

	// Increments up the score at the completion of each game.
	tttScoreIncrement($game_msg, $who_won, $draw_count, $p1_score, $p2_score);


// echo "\n 1.    Winner var - \n". $winner;
// echo "\n 2.     Who_won var -  \n" . $who_won;
// echo "\n 3.     Whose_turn var - \n" . $whose_turn;
// echo "\n 4.     Prev_turn var - \n" . $prev_turn; 
// echo "\n 5. Prev_player var - \n" . $prev_player;
// echo "\n 6. Whois_o var - \n" . $whois_o;
// echo "\n 7. Whois_x var - \n" . $whois_x;


?>





<!-- START OF VIEW -->

<!-- Main header of the game. -->
	<body>
		<div class="">
		<h1>Tic. <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tac. <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Toe.</h1>
		</div>
			
		<div class="">
			<p><?php echo $game_msg; ?></p>
		</div>
		<div>

		<ul class = "tttContainer">
	<?php
	// Loop to display all board items. NOTE: CSS style for board gridboxes is built into the tttQueryCreate function.
	for ($i = 0; $i < 9; $i++) {
	?> 
		<div class="tttGbox cleanLink"> 
	
			<?php
			// First create variable that constructs the string used for each TTT grid box.
			$query = tttQueryCreate($i, $ttt_pos_str, $turn_count, $whose_turn, $whois_x, $whois_o, 
				$draw_count, $p1_score, $p2_score);
			// Call function to reconstruct TTT board.
			echo tttBoardConstruct($i, $ttt_pos_str, $winner, $query); 
			?> 
		</div> <?php  }  ?>

		</ul>


			<ul class = ""> <!-- Need to style this separately. -->
				<li> <?php echo "P1 Score: " . $p1_score; ?></li>
				<li> <?php echo "P2 Score: " . $p2_score; ?></li>
				<li> <?php echo "Draws: " . $draw_count; ?></li>
				<li> <a href="ttt-logic.php"> Reset Game Stats</a></li>
				<li> <a href=<?php echo tttNewGame($p1_score, $p2_score, $draw_count)?>> New Game </a></li>
				<!-- <li> <a href="ttt-logic.php?AI=yes"> Play vs A.I.</li> -->
			</ul>	
		</div>
	</body>
</html>

