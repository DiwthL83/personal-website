<!doctype html>
<html>
<title>Tic Tac Toe</title>
<?php $thisPage = "ttt-logic";?>
<link rel="stylesheet" type="text/css" href="style-ttt.css">

<?php  
$thisPage = "ttt-logic"; include("ttt-funcs.php");


// Call variables to display most recent state of game. 
	global $ttt_pos_str;
	$ttt_pos_str = $_GET["ttt_pos_str"]; // The string variable showing the current state of the board.
	$click = $_GET["click"]; // What grid box was clicked on the board.
	$turn_count = $_GET["turn_count"]; // Number of choices made so far.
	$whose_turn = $_GET["whose_turn"]; // Retains either an 'X' or 'O' depending on who made the choice.
	$prev_turn = $whose_turn; // Cleaner method to alternate turns. Grabs the current turn and makes it the last turn so once another click is performed, the 

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
		$whois_o = tttWhoIsO($whois_o);
		$whois_x = tttWhoIsX($whois_x);
	} else {
		$ttt_pos_str = tttMakeChoice($click, $ttt_pos_str, $whose_turn); // Creates updated version of the TTT game.
		$whose_turn = tttPlayerTurn($whose_turn);
		$turn_count += 1; // Increment up the number of turns taken.
	}

// After most recent state of the TTT board is established, check to see if there's a winner present. Game won't be able to continue once winner is determined or if a tie is determined since all links will be dead at this point. Form button will always be available to reset game and stats if the players so desire.

	$prev_player = tttWhoWon($prev_turn,$whois_x,$whois_o);
	$winner = tttWinnerEval($ttt_pos_str, $turn_count, $whose_turn);
	$who_won = tttWhoWon($whose_turn, $whois_x, $whois_o);
	// $GameMsg = headerdisplay($winner,$whose_turn,$turn_count,$who_won, $prev_turn,$prevplayer);
?>

<!-- Main header of the game. -->
	<body>
		<h1>Tic. <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tac. <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Toe.</h1>
	<!-- <dir> -->
				
			

	<div>
		<ul class = "tttContainer">
	<?php
	// List all board items. NOTE: CSS style for board gridboxes is built into the tttQueryCreate function.

		for ($i = 0; $i < 9; $i+=1) {
		// $i=0;
		// while ($i < 9){
	?> <div class="tttGbox cleanLink"> <?php
			// First create variable that constructs the string used for each TTT grid box.
			$query = tttQueryCreate($i, $ttt_pos_str, $turn_count, $whose_turn, $whois_x, $whois_o, 
				$draw_count, $p1_score, $p2_score);
			// Call function to reconstruct TTT board.
			tttBoardConstruct($ttt_pos_str, $i, $winner, $query);
		?> </div> <?php
		}
	?>
		</ul>
	</div> 
		<!-- </dir>	 -->
		<!-- <div> -->
			<?php
				// Increment up the game stats.
				if ($winner != "no winner") {
					if ($winner == "draw") {
						$draw_count += 1;
					} elseif ($who_won == "Player 1") {	
						$p1_score += 1;
					} elseif ($who_won == "Player 2") {
						$p2_score += 1;
					}
				}
			?>
			<ul class = ""> <!-- Need to style this separately. -->
				<li> <?php echo "P1 Score: " . $p1_score; ?></li>
				<li> <?php echo "P2 Score: " . $p2_score; ?></li>
				<li> <?php echo "Draws: " . $draw_count; ?></li>
				<li> <a href="ttt-logic.php"> Reset Game Stats</a></li>
				<li> <a href= <?php tttNewGame($p1_score, $p2_score, $draw_count)?> > New Game </a></li>
				<!-- <li> <a href="ttt-logic.php?AI=yes"> Play vs A.I.</li> -->
			</ul>	
		</div>
	</body>
</html>

