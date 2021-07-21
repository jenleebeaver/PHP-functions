<?php

// Write your code below:
  function countdown() 
{
  echo "4, 3, 2, 1... ";
  return "blastoff!";
}

// Prints: 4, 3, 2, 1, 
$return_value = countdown(); 
// Prints: blastoff!
echo $return_value; 

// TEST 
function printStringReturnNumber(){
  echo "\n I am a string.";
  echo "\n";
  return 1;
}

$my_num = printStringReturnNumber();
echo $my_num;
