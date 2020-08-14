<?php


//////////////// STRINGS \\\\\\\\\\\\\\\\\\\\

// Strings should be enclosed in single quotes;
$sgl_quotes = '$String'; // => '$String'


// Avoid using double quotes except to embed other variables
$dbl_quotes = "This is a $sgl_quotes."; // => 'This is a $String.'


// Special characters are only escaped in double quotes
$escaped   = "This contains a \t tab character.";
$unescaped = 'This just contains a slash and a t: \t';


$number = 10;
// Enclose a variable in curly braces if needed
$apples = "I have {$number} apples to eat.";
$oranges = "I have ${number} oranges to eat.";
$money = "I have $${number} in the bank.";



// String concatenation is done with .
// echo 'This string ' . "is concatenated\n";



// // Strings can be passed in as parameters to echo
// echo 'Multiple ', 'Parameters ', 'Valid';  // Returns 'MultipleParametersValid'


// strlen() - Return the Length of a String
$num = strlen($apples);
// echo $num; // outputs 12

// str_word_count() - Count Words in a String
// echo str_word_count("Hello world!"); // outputs 2

// // The PHP strrev() function reverses a string.
// echo strrev("Hello world!"); // outputs !dlrow olleH


// // strpos() - Search For a Text Within a String
// echo strpos("Hello world!", "world"); // outputs 6

// // str_replace() - Replace Text Within a String
// echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!


// /*
// Method 1: Using readline() 
// function is a built-in function in PHP. 
// This function is used to read console input.
// */


$input = readline();
$rev = strrev($input);
echo "HELLO ". strtoupper($input) . " " . "{$rev}";

// // Convert all characters to uppercase:
//  echo strtoupper("Hello WORLD!");