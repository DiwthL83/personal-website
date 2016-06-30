
<?php function getWeapons() { echo "
	    <form action=\"\" method=\"get\" style=\"\">
			<input name=\"submitted\" type=\"hidden\" value=\"1\" />
			<input name=\"throwcount\" type=\"hidden\" value=\"<?php echo $throwcount; ?>\" />
			<input name=\"wincount\" type=\"hidden\" value=\"<?php echo $wincount; ?>\" />
			<input name=\"losscount\" type=\"hidden\" value=\"<?php echo $losscount; ?>\" />
			<input name=\"drawcount\" type=\"hidden\" value=\"<?php echo $drawcount; ?>\" />

	    	<!-- Setup the buttons for the \"weapons\" avaiable! -->
			&nbsp;&nbsp;&nbsp;<label><input type=\"submit\" name=\"playerthrow\" value=\"ROCK\"></label>
			&nbsp;&nbsp;&nbsp;<label><input type=\"submit\" name=\"playerthrow\" value=\"PAPER\"></label>
			&nbsp;&nbsp;&nbsp;<label><input type=\"submit\" name=\"playerthrow\" value=\"SCISSORS\"></label>
		</form> ";
} ?>



<?php function rpsGrabCounts() {
//If the form was submitted (i.e., a button was clicked for one of the weapons), grab the values 
			$throwcount = $_POST['throwcount']; return $throwcount;
			$wincount = $_POST['wincount']; return $wincount;
			$losscount = $_POST['losscount']; return $losscount;
			$drawcount = $_POST['drawcount']; return $drawcount;
			$playerthrow = $_POST['playerthrow']; return $playerthrow;
			
} ?>


<?php function rpsRandomComp() 
	{ $randomcomp = rand(1,3); 
		return $randomcomp;
} ?>



<?php function rpsCyborgThrow($randomcomp) {
//Randomize the computer's resulting throw
			if ($randomcomp == 1) { $cyborgthrow = "SCISSORS";}
			if ($randomcomp == 2) { $cyborgthrow = "ROCK";}
			if ($randomcomp == 3) { $cyborgthrow = "PAPER";}
			return $cyborgthrow;
} ?>


<?php function rpsThrowResult($cyborgthrow, $playerthrow, $drawcount, $wincount, $losscount, $throwcount, $winlossdraw) {
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

			//Return the variable that displays if it was a win, loss, or draw.
			return $cyborgthrow;	return $playerthrow; 
			return $drawcount;		return $wincount; 
			return $losscount;		return $throwcount;
			return $winlossdraw;
			//****Throw logic end.****//
} ?>


<?php function rpsThrowIncrement($throwcount) {

			// Increment up the throw count.
			$throwcount++;
} ?>

		
<?php function rpsStatBaseline() {
			//If the form isn't submitted (i.e., a button is not clicked), set all variables to their intial vlaues to get the game started.
			$throwcount = 0; return $throwcount;
			$wincount = 0; return $wincount;
			$losscount = 0; return $losscount;
			$drawcount = 0; return $drawcount;
			$winlossdraw = "None played"; return $winlossdraw;
			$playerthrow = "N/A"; return $playerthrow;
			$cyborgthrow = "N/A"; return $cyborgthrow;
} ?>
