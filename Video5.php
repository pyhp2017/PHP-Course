<?php


/********************************
 * Constants
 */

// A constant is defined by using define()
// and can never be changed during runtime!
// Note: Unlike variables, constants are automatically global across the entire script.

// a valid constant name starts with a letter or underscore,
// followed by any number of letters, numbers, or underscores.
// define("FOO", "This is a Test");

// access to a constant is possible by calling the chosen name without a $
// echo FOO; // Returns 'something'
// echo 'This outputs ' . FOO;  // Returns 'This outputs something'



////////////////////PHP Math\\\\\\\\\\\\\\\\\\\\\\\\

// echo pi(); // returns 3.1415926535898

// echo(min(0, 150, 30, 20, -8, -200));  // returns -200
// echo(max(0, 150, 30, 20, -8, -200));  // returns 150

// echo(abs(-6.7));  // returns 6.7

// echo(sqrt(64));  // returns 8

// echo(round(0.60));  // returns 1
// echo(round(0.49));  // returns 0

// For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
// echo(rand(10, 20));

echo "Please guess a Number: ";
$guess = readline();
$rand = rand(1,10);
//==
// < >
// >= <=
// !=
echo ($rand!=$guess);

// if()
// {
//     echo "\n You won";
// }
// else
// {
//     echo "\n Game Over";
// }





//////////////////////PHP Operators\\\\\\\\\\\\\\\\\\\\\

// PHP Arithmetic Operators

// $x = 10;
// $y = 20;

// $result = $x + $y;
// $result = $x * $y;
// $result = $x - $y;
// $result = $x / $y;
// $result = $y % $x; //Modulus
// $result = $x ** $y; //Exponentiation


/*

PHP Assignment Operators

x = y 
x += y 	x = x + y 	Addition 	
x -= y 	x = x - y 	Subtraction 	
x *= y 	x = x * y 	Multiplication 	
x /= y 	x = x / y 	Division 	
x %= y 	x = x % y 	Modulus

*/


//PHP Increment / Decrement Operators

/*
++$x 	Pre-increment 	Increments $x by one, then returns $x 	
$x++ 	Post-increment 	Returns $x, then increments $x by one 	
--$x 	Pre-decrement 	Decrements $x by one, then returns $x 	
$x-- 	Post-decrement 	Returns $x, then decrements $x by one
*/

