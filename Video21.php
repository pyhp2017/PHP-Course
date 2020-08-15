<?php


// https://medium.com/factory-mind/regex-tutorial-a-simple-cheatsheet-by-examples-649dc1c3f285

// Regex tutorial

//A regular expression is a sequence of characters that forms a search pattern.
// When you search for data in a text, you can use this search pattern to describe what
// you are searching for.


// A regular expression can be a single character, or a more complicated pattern.
// Regular expressions can be used to perform all types of text search and text replace operations.


// PHP provides a variety of functions that allow you to use regular expressions


// $str = "hello World";
// $pattern = "/hello/i"; //i -> is a modifier that makes the search case-insensitive.

// The preg_match() function will tell you whether a string contains matches of a pattern.
// echo preg_match($pattern, $str); // Outputs 1


// The preg_match_all() function will tell you how many matches were found for a pattern in a string.
// $str = "The rain in SPAIN falls mainly on the plains.";
// $pattern = "/ain/i";
// echo preg_match_all($pattern, $str); // Outputs 4



// The preg_replace() function will replace all of the matches of the pattern 
// in a string with another string.

// $str = "Visit Microsoft!";
// $pattern = "/microsoft/i";
// echo preg_replace($pattern, "Youtube", $str); // Outputs "Visit Youtube!"




// $input = [
//     "Red",
//     "Pink",
//     "Green",
//     "Blue",
//     "Purple"
//   ];
  
//   $result = preg_grep("/^p/i", $input);
//   print_r($result);

  


//   $date = "1970-01-01 00:00:00";
//   $pattern = "/[-\s:]/";
//   $components = preg_split($pattern, $date);
//   print_r($components);