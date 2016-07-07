<?php
include("ttt-funcs.php");





echo "\nTesting if function returns 'no winner' due to insufficient number of turns taken (need to reach at least turn number 6 to be able to determine a winner, since there'd need to be at least 5 turns taken to properly evaluate).\n";
if (tttWinnerEval(5, "~~~~~~~~~") == "no winner") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if correctly determining a win based on three X's in a row and at least 5 turns elapsed. \n";
if (tttWinnerEval(6, "XXX~~~~~~") == "X") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if correctly determining a diagonal win based on three O's in a row and at least 5 turns elapsed. \n";
if (tttWinnerEval(8, "O~~~O~~~O") == "O") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";



echo "\nTesting if correctly determining a draw with full board filled in and more than 9 turns elapsed without a winner. \n";
if (tttWinnerEval(10, "XOXOXOOXO") == "draw") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";



?>