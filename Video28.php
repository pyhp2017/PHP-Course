<?php


// ----------Callback Functions----------


/**
 A callback function (often referred to as just "callback") is a function 
 which is passed as an argument into another function.
 */

// function exclaim($str) 
// {
//     return $str . "! ";
// }
  
// function ask($str) 
// {
//     return $str . "? ";
// }
  
// function printFormatted($str, $format) 
// {
//     // Calling the $format callback function
//     echo $format($str);
// }
  
// // Pass "exclaim" and "ask" as callback functions to printFormatted()
// printFormatted("Hello world", "exclaim");
// printFormatted("Hello world", "ask");





//Example 2:



// function my_callback($item) 
// {
//     return strlen($item);
// }
  
// $strings = ["apple", "orange", "banana", "coconut"];
// $lengths = array_map("my_callback", $strings);
// print_r($lengths);