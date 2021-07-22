<?php
// Write your code below:

//EX1
function greetFriend($name = "old chum")
{
  echo "Hello, $name!";
};
 
greetFriend("Marvin"); // Prints: Hello, Marvin!
echo "\n";
greetFriend(); // Prints: Hello, old chum!

//Test1
function calculateTip($total_cost,$percent_tip = 20){
  return $total_cost + $total_cost * $percent_tip/100;
};

echo "\n";
echo calculateTip(20, 25);
echo "\n";
echo calculateTip(20);
