<?php

//EX
function calculateDaysLeft($feed_quantity, $number, $rate)
{
  $result = $feed_quantity / ($number * $rate);
  //if $result is echo'd outside of function then would return undefined variable because it is outside of the scope - variable scope 
  //this is a local scope because it is defined inside the code block 
  return $result;
}
echo calculateDaysLeft(300, 2, 30);

//EX of global scope 
// $feed_quantity = 300;
// function calculateDaysLeft($number, $rate)
// {
//   global $feed_quantity;
//   $result = $feed_quantity / ($number * $rate);
//   return $result;
// }
// echo calculateDaysLeft(2, 120);

//Ex scope
 function first()
{
  echo "\nThis works!\n";
}
function second()
{
  first();
}
second();

//

$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);
