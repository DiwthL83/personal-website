<!doctype html>
<title>Tic Tac Toe</title>
<link rel="stylesheet" type="text/css" href="style-ttt.css">
<?php // Include TTT functions page and identify page as its file name. 
	$thisPage = "ttt-draft"; 
	include("ttt-draft-funcs.php");	?>

<?php 
	// Start new session if new game or increment up reserved "counter" variable for turns taken.
	session_start();
   
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




	isGameOver(); // Function that 
	gameResult(); // Function checks if each value in the string has either an X or O.
	increase_winner_count();
	increase_game_count();

	//

	// Can put this if/then section into a function.
	if( isset( $_SESSION['counter'] ) ) {
	$turn_count = $_SESSION['counter'] += 1;
	}else {
	$turn_count = $_SESSION['counter'] = 1;
	}
?>


<?php
	if (isset($_GET['click'])==0) {
		tttArrayCreate();
		global $current_turn;  $current_turn = 1;
		global $turn_count;  $turn_count = 1;
	}
	if (isset($_GET['click'])==1) {
		include("ttt-logic.php");
	}
?>


<?php

?>


<?php

?>



<html class="mainPage">
	<p>
		<a href="gamesIndex.php"> <-- Back to Games</a>


	</p> 

	<form action="ttt-draft.php"  method=""  style="font-size: 12px; font-family:arial black;">
		&nbsp;&nbsp;&nbsp;<input type="submit" value="RESET GAME">
	</form>

<!-- Button to destroy all sessions, including game count, player wins, etc. -->
	<form action="<?php session_destroy();?>"  method=""  style="font-size: 12px; font-family:arial black;">
		&nbsp;&nbsp;&nbsp;<input type="submit" value="RESET ALL STATS">
	</form>



</html>



