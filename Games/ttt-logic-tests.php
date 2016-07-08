<?php
include("ttt-funcs.php");





echo "\nTesting if my tttWinnerEval function returns 'no winner' due to insufficient number of turns taken (need to reach at least turn number 6 to be able to determine a winner, since there'd need to be at least 5 turns taken to properly evaluate).\n";
if (tttWinnerEval(5, "~~~~~~~~~") == "no winner") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if my tttWinnerEval function correctly determining a win based on three X's in a row and at least 5 turns elapsed. \n";
if (tttWinnerEval(6, "XXX~~~~~~") == "X") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if my tttWinnerEval function correctly determining a diagonal win based on three O's in a row and at least 5 turns elapsed. \n";
if (tttWinnerEval(8, "O~~~O~~~O") == "O") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if my tttWinnerEval function correctly determining a draw with full board filled in and more than 9 turns elapsed without a winner. \n";
if (tttWinnerEval(10, "XOXOXOOXO") == "draw") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if my tttChoicesMade function correctly replaces the right marker in the board string based on which board position the player clicks. \n";
if (tttChoicesMade (2, "~~~~~~~~~", "O") == "~~O~~~~~~") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\n Testing if my tttBoardConstruct function correctly uses replaces the right marker in the board string based on which board position the player clicked. \n";
if (tttBoardConstruct(8,"~~~~~~~~X", "no winner", '<li><a href="test.php">#</a></li>') === "X"){
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if my tttWhosePlayer1_2 function correctly returns Player 1 for the 'O' and Player 2 for the 'X' (based on the whose_turn value). \n";
if (tttWhosPlayer1_2("O", "Player 1", "Player 2") == "Player 1"){
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";
'




'
?>