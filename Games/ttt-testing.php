<!doctype html>
<title>Tic Tac Toe</title>
<link rel="stylesheet" type="text/css" href="style-ttt.css">
<?php 
	$thisPage = "ttt-testing"; 
	include("ttt-funcs.php"); ?>

<?php
	if (isset($_GET['click'])==0) {
		tttArrayCreate();
		global $current_turn;  $current_turn = 1;
		global $turn_count;  $turn_count = 1;
	} return $ttt_pos_arr;

// First things first: DISPLAY THE VARIABLES!!!!!!
	if (isset($_GET['click'])==1) {
		for($i=1;$i < 10; $i++) 

	}

?>



<!-- USE AMPERSANDS TO SEPARATE THE VARIABLES YOU NEED FOR EACH LINK. FOR INSTANCE, I CAN PASS ALONG THE CELL NUMBER IN A VARIABLE, THE STRING OF CODE TO UPDATE THE ttt_pos_arr ARRAY VALUE, AND THE STRING TO SPECIFY THAT THE COUNTER INCREMENT UP. CREATE ONE QUERY BASED ON WHETHER THE SELECTION WAS MADE BY PLAYER "O" OR PLAYER "X". 


WHAT INFO DO YOU NEED TO PASS THROUGH THE QUERY IN ORDER TO RENDER THE PAGE AS IT WAS LAST SEEN?-->


<html class="mainPage">	
	<p>
		<a href="gamesIndex.php"> <-- Back to Games</a>
		<br><br><br>
		<!-- <?php// $current_turn==1 ? echo "Player " . $next_turn . ", it's your turn." : echo "Player " . $next_turn . ", it's your turn."; ?> -->
		<br><br><br>
	<ul class ="tttContainer">
		<li class="tttGbox cleanLink"><?php echo $ttt_pos_arr[0];?></li>
		<li class="tttGbox"><a href="?click=B1" class="cleanLink"><?php echo $ttt_pos_arr[0];?></a></li>
	</ul>

	</p> 




	<form action="ttt-testing.php"  method="post"  style="font-size: 12px; font-family:arial black;">
		&nbsp;&nbsp;&nbsp;<input type="submit" value="RESET GAME">
	</form>

</html>




