<?php
// Write your code below:

//EX1
function divide($num_one, $num_two)
{
  return $num_one / $num_two;
};

echo divide(12, 3);
echo "\n";
echo divide(3, 12);

//EX2 
//Will result in an error
// function expectTwo($first, $second)
// {
//   return "whatever";
// }
 
// echo expectTwo("test"); 

//Test1
function calculateArea($width, $height){
  return $width * $height;
}

echo "\n";
echo calculateArea( 5, 2);

function calculateVolume($height, $width, $depth){
  return $height * $width * $depth;
}

echo "\n";
echo calculateVolume(5, 2, 3);

