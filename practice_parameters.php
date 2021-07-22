<?php

// Write your code below:
//Example:
function sayCustomHello($name)
{
echo "\n Hello, $name!";
};
 
sayCustomHello("Aisle Nevertell"); // Prints: Hello, Aisle Nevertell!
 
sayCustomHello(" Codecademy learner"); // Prints: Hello, Codecademy Learner!

function increaseEnthusiasm($excitement){
  return $excitement . "!";
};


echo increaseEnthusiasm("\n Yay");

function repeatThreeTimes($word){
     return $word . $word . $word;
};

echo repeatThreeTimes("\n hi!");

echo increaseEnthusiasm(repeatThreeTimes("\n new"));

echo repeatThreeTimes(increaseEnthusiasm("\n!"));
