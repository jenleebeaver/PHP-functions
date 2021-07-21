<?php

//Example 1:
//1. define function
//Synchronous assignment
function announceRunning()
{
  echo "The first function is running!\n";
  return "This is the return value of the first function.";
}
 
$first_result = announceRunning();
echo $first_result;

//Example 2:
//echo will never be printed. As soon as the return statement is reached the function will end. 
function announceRunning2()
{
  echo "\n";
  return "\n This is the return value of the second function.";
  echo "\n P.S., I love you";
}
 
$second_result = announceRunning2();
echo $second_result;

//

function notFound()
{
  echo "\n ERROR: Page not found!\n";
   return 404;
}

function greetLearner()
{
  echo "\n";
  echo "Hello, Learner!\n";
  echo "I hope you're (still) enjoying PHP!\n";
  echo "Love, Codecademy\n";
  return "<3";
}

// Don't change the code below:

$error = notFound(); 
$heart = greetLearner();

echo "\n";
echo "\n I received a $error, but it's ok because I also received $heart.";
