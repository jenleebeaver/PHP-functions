//Notes 
//EX 1:
function returnFive() 
{
  return 5;
}
 
echo returnFive(); // Prints: 5
echo "\n";
echo 5 + 3; // Prints: 8
 
$num = 5;
//function invocation (do and return);
echo "\n";
echo $num + 3; // Prints: 8
 
 echo "\n";
echo returnFive() + 3; // Prints: 8

//
function first()
{
  return "You did it!";
}

function second()
{
  return "You're amazing!";
}

function third()
{
  return "You're a coding hero!\n";
}

// Write your code below:
echo "\n" . first() . ", " . second() . ", "  . third();
