<?php
//EX 
function addX ($param)
{
  //reassigning and appending X
  $param = $param . "X";
  echo $param;
};
$word = "Hello \n";
addX($word); // Prints: HelloX
echo $word; // Prints: Hello

//
//EX2
//permanent assignment 
function addXPermanently (&$param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello \n";
addXPermanently($word); // Prints: HelloX
echo $word; // Prints: HelloX

//

$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:

//permanent assignment
function convertToQuestion(&$question){
  //prepend string 
  $question =  "\nDo you think " . $question . "?\n";
};

$adjective = "alot";
convertToQuestion($adjective);
echo $adjective;

convertToQuestion($string_one);
echo $string_one;
convertToQuestion($string_two);
echo $string_two;
convertToQuestion($string_three);
echo $string_three;
