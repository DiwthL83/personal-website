<?php 


// Msg to say whose turn it is, or if there's a winner or tie.
function tttGameMsg(){

}



// Query string containing smileys for each position; this is the default for each position on the TTT board.
function tttQueryCreate($i, $ttt_pos_str,  $turn_count, $whose_turn, $whois_x, $whois_o, $draw_count, 
	$p1_score, $p2_score){
	return 
		'<li><a href="ttt-logic.php?click=' . $i . "&ttt_pos_str=" . $ttt_pos_str
		. "&turn_count=" . $turn_count . "&whose_turn=" . $whose_turn . "&whois_x=" . $whois_x . 
		"&whois_o=" . $whois_o . "&draw_count=" . $draw_count . "&p1_score=" . $p1_score . "&p2_score=" 
		. $p2_score . '" class="cleanLink">#</a></li>';
}


// Adds an 'X' or 'O' to the $ttt_pos_str variable depending on whose turn it is (via $whose_turn).
function tttMakeChoice ($click, $ttt_pos_str, $whose_turn){
	$ttt_pos_str[$click] = $whose_turn;
	$ttt_pos_str;
}

// If a position on the board isn't a smiley, return its 'X or 'O'. Otherwise, return the link string to make it a smiley. 
function tttBoardConstruct($i, $ttt_pos_str, $winner, $query){
	if ($ttt_pos_str[$i]== "X") {
		return '<li> X </li>';
	}elseif ($ttt_pos_str[$i] == "O") {
		return '<li> O </li>';
	}elseif ($winner == "no winner"){
		return $query;
	}	
}



// <!-- Function to pick the next turn. -->
function tttPlayerTurn($whose_turn){
	//Player X's turn next.
	if ($whose_turn == "O") {
		return "X";
	} else { return "O"; }
}



// Evaluates board for a winner.
function tttWinnerEval($turn_count, $ttt_pos_str){
	if ($turn_count > 5 &&
		// X Horizontal check.
		(($ttt_pos_str[0].=$ttt_pos_str[1].=$ttt_pos_str[2]=="XXX") ||
		($ttt_pos_str[3].=$ttt_pos_str[4].=$ttt_pos_str[5]=="XXX") ||
		($ttt_pos_str[6].=$ttt_pos_str[7].=$ttt_pos_str[8]=="XXX") ||
		// X Vertical check.
		($ttt_pos_str[0].=$ttt_pos_str[3].=$ttt_pos_str[6]=="XXX") ||
		($ttt_pos_str[1].=$ttt_pos_str[4].=$ttt_pos_str[7]=="XXX") ||
		($ttt_pos_str[2].=$ttt_pos_str[5].=$ttt_pos_str[8]=="XXX") ||
		// X Diag check.
		($ttt_pos_str[0].=$ttt_pos_str[4].=$ttt_pos_str[8]=="XXX") ||
		($ttt_pos_str[2].=$ttt_pos_str[4].=$ttt_pos_str[6]=="XXX"))) {
		return "X";
	}
	elseif ($turn_count > 5 &&
		// O Horizontal check.
		(($ttt_pos_str[0].=$ttt_pos_str[1].=$ttt_pos_str[2]=="OOO") ||
		($ttt_pos_str[3].=$ttt_pos_str[4].=$ttt_pos_str[5]=="OOO") ||
		($ttt_pos_str[6].=$ttt_pos_str[7].=$ttt_pos_str[8]=="OOO") ||
		// O Vertical check.
		($ttt_pos_str[0].=$ttt_pos_str[3].=$ttt_pos_str[6]=="OOO") ||
		($ttt_pos_str[1].=$ttt_pos_str[4].=$ttt_pos_str[7]=="OOO") ||
		($ttt_pos_str[2].=$ttt_pos_str[5].=$ttt_pos_str[8]=="OOO") ||
		// O Diag check.
		($ttt_pos_str[0].=$ttt_pos_str[4].=$ttt_pos_str[8]=="OOO") ||
		($ttt_pos_str[2].=$ttt_pos_str[4].=$ttt_pos_str[6]=="OOO"))) {
		return "O";
	}
	elseif ($turn_count == 10) 
		{ return "draw"; 
	} else { 
		return "no winner"; } 
}


// Return which player won the game. 
function tttWhoWon($whose_turn, $whois_o, $whois_x){
	if ($whose_turn == "X") {
		$who_won = $whois_o;
	} elseif ($whose_turn == "O") {
		$who_won = $whois_x;
	} return $who_won;
}


// Retains variables required for a new game.
function tttNewGame($p1_score, $p2_score, $draw_count){
	return '"ttt-logic.php?p1_score=' . $p1_score . "&p2_score=" . $p2_score . "&draw_count=" . $draw_count .'"';
}



// Sets Player 1 as O.
function tttWhoIsO($whois_o){
	if ($whois_o == "" || $whois_o == "Player 2") {
		return "Player 1";
	} elseif ($whois_o == "Player 1") {
		return "Player 2";
	}
}


// Sets Player 2 as X.
function tttWhoIsX($whois_x){
	if ($whois_x == "" || $whois_x == "Player 1") {
		return "Player 2";
	} elseif ($whois_x == "Player 2") {
		return "Player 1";
	}
}



// <!-- Creates initial array and makes all values a smiley face. -->
function tttArrayCreate(){
	global $ttt_pos_arr;
	$ttt_pos_arr = array();
	for($i=1;$i<10;$i++) {
	array_push($ttt_pos_arr,"&#9786;");
		// global $$varname;
		// $varname = "B$i";
		// $$varname = "&#9786;";
	}
}
 





?>