<?php 




function tttArrayCreate() {
  for($i=1;$i<10;$i++){
    $ttt_val_array[] = array("B$i" => "B$i");
    $z = $i-1;
    $varname ="B$z";
    global $$varname; 
    $$varname = $ttt_val_array[$z]['B$i'];
  }    global $ttt_val_array;    //var_dump($ttt_val_array);
} 



    // $varname = "B$i";
    // $$varname = "B$i";
    // global $$varname;


function tttArrayCreate__2() {
  global $ttt_val_array2;
  $ttt_val_array2 = array();
  for($i=1;$i<10;$i++){
    array_push($ttt_val_array2,"B$i");
  }   

} 

echo "\n Call the function... \n";
tttArrayCreate__2();





echo "\nTesting that the value in element 0 is B1. \n";
// if ($ttt_val_array2[0]["B1"] == "B1") {

if ($ttt_val_array2[0] == "B1") {
  echo "Success!" ;
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";



?>