<?php 





function tttArrayCreate__2() {
  for($i=1;$i<10;$i++){
    $ttt_val_array2[] = array("B$i" => "$i");
    return $ttt_val_array2;
  }   
} 

echo "\n Call the function... \n";
tttArrayCreate__2();


echo "\nTesting that the value in element 0 under the key B1 is 1. \n";
if ($ttt_val_array2[0]["B1"] == 1) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";



?>