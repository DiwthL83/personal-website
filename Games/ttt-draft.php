<!doctype html>
<title>Tic Tac Toe</title>
<link rel="stylesheet" type="text/css" href="style-ttt.css">
<?php 
	$thisPage = "ttt-draft"; 
	include("ttt-funcs.php");	?>




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
	// Used to alternate turns.
	// $current_turn = $current_turn * -1;
	tttArrayCreate();
	// firstTurn();
	// nextTurn();
?>

<!-- USE AMPERSANDS TO SEPARATE THE VARIABLES YOU NEED FOR EACH LINK. FOR INSTANCE, I CAN PASS ALONG THE CELL NUMBER IN A VARIABLE, THE STRING OF CODE TO UPDATE THE ttt_val_arr ARRAY VALUE, AND THE STRING TO SPECIFY THAT THE COUNTER INCREMENT UP. CREATE ONE QUERY BASED ON WHETHER THE SELECTION WAS MADE BY PLAYER "O" OR PLAYER "X". -->


<html class="mainPage">
	<p>
		<a href="gamesIndex.php"> <-- Back to Games</a>

	<ul class ="tttContainer">
		<li class="tttGbox"><a href="?click=B1" class="cleanLink"><?php echo $ttt_pos_arr[0];?></a></li>
		<li class="tttGbox"><a href="?click=B2" class="cleanLink"><?php echo $ttt_pos_arr[1];?></a></li>
		<li class="tttGbox"><a href="?click=B3" class="cleanLink"><?php echo $ttt_pos_arr[2];?></a></li>
		<li class="tttGbox"><a href="?click=B4" class="cleanLink"><?php echo $ttt_pos_arr[3];?></a></li>
		<li class="tttGbox"><a href="?click=B5" class="cleanLink"><?php echo $ttt_pos_arr[4];?></a></li>
		<li class="tttGbox"><a href="?click=B6" class="cleanLink"><?php echo $ttt_pos_arr[5];?></a></li>
		<li class="tttGbox"><a href="?click=B7" class="cleanLink"><?php echo $ttt_pos_arr[6];?></a></li>
		<li class="tttGbox"><a href="?click=B8" class="cleanLink"><?php echo $ttt_pos_arr[7];?></a></li>
		<li class="tttGbox"><a href="?click=B9" class="cleanLink"><?php echo $ttt_pos_arr[8];?></a></li>
	</ul>

	</p> 

	<form action="ttt-draft.php"  method=""  style="font-size: 12px; font-family:arial black;">
		&nbsp;&nbsp;&nbsp;<input type="submit" value="RESET GAME">
	</form>

</html>



