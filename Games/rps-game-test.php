<!DOCTYPE html>
<?php $thisPage = "rps-game-test"; 
$thisSection=="Games"?>
<?php include("top-games.php");?>

<div id="right_side"> 
		<p><a href="gamesIndex.php"><-- Back to Games</a></p>
		<?php
			if (isset($_POST['submitted'])==1) 
			{ //If the form was submitted (i.e., a button was clicked for one of the weapons), grab the values 
			$throwcount = $_POST['throwcount'];
			$wincount = $_POST['wincount'];
			$losscount = $_POST['losscount'];
			$drawcount = $_POST['drawcount'];
			$playerthrow = $_POST['playerthrow'];

			//Randomize the computer's resulting throw
			$randomcomp = rand(1,3);
			if ($randomcomp == 1) { $cyborgthrow = "SCISSORS";}
			if ($randomcomp == 2) { $cyborgthrow = "ROCK";}
			if ($randomcomp == 3) { $cyborgthrow = "PAPER";}

			//****Throw Logic start.****

			// If you both throw the same thing...
			if ($cyborgthrow == $playerthrow) {
			$winlossdraw = "DRAW";
			$drawcount++;}

			// Your paper beats rock.
			if ($cyborgthrow == "ROCK" && $playerthrow == "PAPER") {
			$winlossdraw = "WIN";
			$wincount++;}

			// Your scissors beats paper.
			if ($cyborgthrow == "PAPER" && $playerthrow == "SCISSORS") {
			$winlossdraw = "WIN";
			$wincount++;}

			// Your rock beats scissors.
			if ($cyborgthrow == "SCISSORS" && $playerthrow == "ROCK") {
			$winlossdraw = "WIN";
			$wincount++;}

			// Their scissors beats your paper.
			if ($cyborgthrow == "SCISSORS" && $playerthrow == "PAPER") {
			$winlossdraw = "LOSS";
			$losscount++;}

			// Their paper beats your rock.
			if ($cyborgthrow == "PAPER" && $playerthrow == "ROCK") {
			$winlossdraw = "LOSS";
			$losscount++;}

			// Their rock beats your scissors.
			if ($cyborgthrow == "ROCK" && $playerthrow == "SCISSORS") {
			$winlossdraw = "LOSS";
			$losscount++;}

			//****Throw logic end.****

			// Increment up the throw count.
			$throwcount++;

			} else {
		
			//If the form isn't submitted (i.e., a button is not clicked), set all variables to their intial vlaues to get the game started.
			$throwcount = 0;
			$wincount = 0;
			$losscount = 0;
			$drawcount = 0;
			$winlossdraw = "None played";
			$playerthrow = "N/A";
			$cyborgthrow = "N/A";  }
		?>


	<!-- This is the title that appears in the browser window header when you load the page. -->
	<title>Rock. Paper. Scissors.</title>
	<p style="font-size: 40px;"><b>
		Rock. <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paper. <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scissors.</b></p>

	<!-- This is where the form will go for a human player to choose between rock, paper, or scissors. -->
	<!-- With the action left blank, the values defined inside the form tags will be sent back to the same page the game is on.-->

	    <!-- A form to hold hidden placeholder variables and weapon variables -->
	    <form action="" method="post" style="">
			<input name="submitted" type="hidden" value="1" />
			<input name="throwcount" type="hidden" value="<?php echo $throwcount; ?>" />
			<input name="wincount" type="hidden" value="<?php echo $wincount; ?>" />
			<input name="losscount" type="hidden" value="<?php echo $losscount; ?>" />
			<input name="drawcount" type="hidden" value="<?php echo $drawcount; ?>" />

	    	<!-- Setup the buttons for the "weapons" avaiable! -->
			&nbsp;&nbsp;&nbsp;<label><input type="submit" name="playerthrow" value="ROCK"></label>
			&nbsp;&nbsp;&nbsp;<label><input type="submit" name="playerthrow" value="PAPER"></label>
			&nbsp;&nbsp;&nbsp;<label><input type="submit" name="playerthrow" value="SCISSORS"></label>
		</form>

		<br>
		<!-- Titles to tally up the game status... -->
		<p style="font-family: arial black; font-size: 16px;">Game Stats: <?php echo $winlossdraw; ?></p>
		<p>You threw: <?php echo $playerthrow; ?></p>
		<p>Cyborg Threw: <?php echo $cyborgthrow; ?></p>
		<p>Total Throws: <?php echo $throwcount; ?></p>
		<p>Total Wins: <?php echo $wincount; ?></p>
		<p>Total Losses: <?php echo $losscount; ?></p>
		<p>Total Draws: <?php echo $drawcount; ?></p>

		<!--  This will reset the page and in turn reset counts when it reloads the page. -->
		<p>
			<form method="get" action="rps-game-test.php" style="font-size: 12px; font-family:arial black;">
				&nbsp;&nbsp;&nbsp;<input type="submit" value="RESET STATS">
			</form>
		</p>
		</div>
	</body>
</html>


