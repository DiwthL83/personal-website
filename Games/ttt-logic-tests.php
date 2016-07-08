<?php
include("ttt-funcs.php");





echo "\nTesting if function returns 'no winner' due to insufficient number of turns taken (need to reach at least turn number 6 to be able to determine a winner, since there'd need to be at least 5 turns taken to properly evaluate).\n";
if (tttWinnerEval(5, "~~~~~~~~~") == "no winner") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if correctly determining a win based on three X's in a row and at least 5 turns elapsed. \n";
if (tttWinnerEval(6, "XXX~~~~~~") == "X") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if correctly determining a diagonal win based on three O's in a row and at least 5 turns elapsed. \n";
if (tttWinnerEval(8, "O~~~O~~~O") == "O") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if correctly determining a draw with full board filled in and more than 9 turns elapsed without a winner. \n";
if (tttWinnerEval(10, "XOXOXOOXO") == "draw") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";




echo "\nTesting if my function correctly replaces the right marker in the board string based on which board position the player clicks. \n";
if (tttChoicesMade (2, "~~~~~~~~~", "O") == "~~O~~~~~~") {
  echo "SUCCESS!";
}
else{
  echo "FAILED!";
}
echo "\n-------------------------------------------------------------------\n";

?>