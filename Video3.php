<?php


//Single line Comment

#Single Line Comment



/*
Multi
Line
Comment
*/


// Use "echo" or "print" to print output
print 'Hello '; // Prints "Hello " with no line break

// () are optional for print and echo
echo "World\n"; // Prints "World" with a line break
// (all statements must end with a semicolon)

/*
The differences are small: 
    echo has no return value while print has a return value of 1 so 
    it can be used in expressions. echo can take multiple parameters 
    (although such usage is rare) while print can take one argument. 
    echo is marginally faster than print.

*/



/************************************
 * Types & Variables
 */

//  Think of variables as containers for storing data.
// Variable names are case-sensitive ($age and $AGE are two different variables)
//PHP is a Loosely Typed Language


// Variables begin with the $ symbol.
// A valid variable name starts with a letter or an underscore,
// followed by any number of letters, numbers, or underscores.

// You don't have to (and cannot) declare variables.
// Once you assign a value, PHP will create the variable with the right type.


// Boolean values are case-insensitive
$boolean = false;  // or TRUE or True or false or FALSE
$integer = 20;
$string = "Hello";
$char = 'c';
$float = 1.3;


// Delete variable
unset($int1);

// Arithmetic
$sum        = 1 + 1; // 2
$difference = 2 - 1; // 1
$product    = 2 * 2; // 4
$quotient   = 2 / 1; // 2
$mode = 10%3; //1


// Shorthand arithmetic
$number = 0;
$number += 1;      // Increment $number by 1
echo $number++;    // Prints 1 (increments after evaluation)
echo ++$number;    // Prints 3 (increments before evaluation)
$number /= $float; // Divide and assign the quotient to $number
        

// PHP Variables Scope
// local
// global
// static
