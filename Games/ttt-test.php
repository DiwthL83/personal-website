<!doctype html>
<title>Tic Tac Toe</title>
<link rel="stylesheet" type="text/css" href="style-ttt.css">
<?php 
	$thisPage = "ttt-test"; 
	include("ttt-funcs.php");	?>


<!-- If clicked, put an "X" or an "O" in the box based on whose turn it is. -->
<?php
     $clicked=$_GET['click'];
        if ($clicked == 'B1') { // 1. update the array 2. update the variable;
        	// do whatevs
}	?>




<?php
	firstTurn();
	tttArrayCreate__2();?>



<?php
	// Run the function to generate the array and create variables B1 to B9 from the array 
	// tttArrayCreate();	?>




<html class="mainPage">
	<p>
		<a href="gamesIndex.php"> <-- Back to Games</a>

		<ul class ="tttContainer">
			<li class="tttGbox"><a href="?click=$current_turn" class="cleanLink">&#9786;</a></li>
			<li class="tttGbox"><a href="?click=B2" class="cleanLink"><?php echo $ttt_val_array2[1]["B2"];?></a></li>
			<li class="tttGbox"><a href="?click=B3" class="cleanLink"><?php echo $B3;?></a></li>
			<li class="tttGbox"><a href="?click=B4" class="cleanLink"><?php echo "$B4";?></a></li>
			<li class="tttGbox"><a href="?click=B5" class="cleanLink"><?php echo "$B5";?></a></li>
			<li class="tttGbox"><a href="?click=B6" class="cleanLink"><?php echo "$B6";?></a></li>
			<li class="tttGbox"><a href="?click=B7" class="cleanLink"><?php echo "$B7";?></a></li>
			<li class="tttGbox"><a href="?click=B8" class="cleanLink"><?php echo "$B8";?></a></li>
			<li class="tttGbox"><a href="?click=B9" class="cleanLink"><?php echo "$B9";?></a></li>
		</ul>
	</p> 

	<form action="ttt-test.php"  method="post"  style="font-size: 12px; font-family:arial black;">
		&nbsp;&nbsp;&nbsp;<input type="submit" value="RESET STATS">
	</form>

</html>



