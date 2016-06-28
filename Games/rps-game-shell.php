
	<!-- Block of PHP code to make game 'run'. -->
	<?php 
		if (isset($_POST['submitted'])==1) {
		//If statement saying if the form containing the choices of r/p/s has been submitted, then call these functions and create these variables below.
			rpsGrabCounts();
			$randomcomp = rpsRandomComp();
			rpsCyborgThrow($randomcomp);
			rpsThrowResult($cyborgthrow, $playerthrow, $drawcount, $wincount, $losscount, $throwcount);
			rpsThrowIncrement($throwcount);
		} else {
			//If the form isn't submitted (i.e., a button is not clicked), set all variables to their intial vlaues to get the game started.
			rpsStatBaseline(); };
	?>


<!doctype html>
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
		<p>You Threw: <?php echo $_POST['playerthrow']; ?></p>
		<p>Cyborg Threw: <?php echo $cyborgthrow; ?></p>
		<p>Total Throws: <?php echo $_POST['throwcount']; ?></p>
		<p>Total Wins: <?php echo $_POST['wincount']; ?></p>
		<p>Total Losses: <?php echo $_POST['losscount']; ?></p>
		<p>Total Draws: <?php echo $_POST['drawcount']; ?></p>

		<!--  This form will reset the page since it's calling the original page again. This will in turn reset counts when it reloads the page. If you simply reload the browser page using your browser's button, this should not effect the game counts since the page will reference the most recent variable values. -->
		<p>
			<form action="rps-game-new.php"  method="get"  style="font-size: 12px; font-family:arial black;">
				&nbsp;&nbsp;&nbsp;<input type="submit" value="RESET STATS">
			</form>
		</p>
		</div>
	</body>
</html>