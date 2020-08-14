<?php

/********************************
 * Arrays
 * An array is a special variable, which can hold more than one value at a time.
 */




//  $myArray = array(1,2,3,4,5,6,123);
//  $myArray = [1,2,3,4,5,6,123];
//  echo $myArray[6];


// All arrays in PHP are associative arrays (hashmaps in some languages)

// Works with all PHP versions
// $associative = array('One' => 1, 'Two' => 2, 'Three' => 3);


// // PHP 5.4 introduced a new syntax
// $associative = ['One' => 1, 'Two' => 2, 'Three' => 3];

// echo $associative['One']; // prints 1

// // Add an element to an associative array
// $associative['Four'] = 4;


// print_r($associative); // prints: Array ( [0] => One [1] => Two [2] => Three )


// // List literals implicitly assign integer keys
// $array = ['One', 'Two', 'Three'];
// // $array[4] = "Four";

// // echo $array[0]; // => "One"

// // // Add an element to the end of an array
// $array[] = 'Four';

// // // or
// array_push($array, 'Five', 'Six');



// // Remove element from array
// unset($array[3]);

// print_r($array);


//Get The Length of an Array - The count() Function
// $cars = array("Volvo", "BMW", "Toyota" , true , 1.2 , 800);
// echo count($cars);

// //Multidimensional Arrays
// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );


  // $cars = [ ["Volvo",22,18] , ["BMW",15,13]  ];

  // echo $cars[1][0];
  // print_r($cars);



// // Prints variable to stdout in human-readable format
// print_r($array); // prints: Array ( [0] => One [1] => Two [2] => Three )




//   sort() - sort arrays in ascending order
// $numbers = array(4, 6, 2, 22, 11);
// sort($numbers);


// // sort arrays in descending order
// $numbers = array(4, 6, 2, 22, 11);
// rsort($numbers);
// // print_r($numbers);


// $age = array("Peter"=>"50", "Ben"=>"37", "Joe"=>"43");
// asort($age);


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// ksort($age);
// // print_r($age);



// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// arsort($age);


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// krsort($age);





$x = 1;
$y = 2;
$x = &$y; 
// echo $x;
$y = 100;
$z = &$y;
// $z now contains a reference to $y. Changing the value of
// $z will change the value of $y also, and vice-versa.


// Dumps type and value of variable to stdout
// var_dump($z); // prints int(0)




 // Variables can be converted between types, depending on their usage.

$integer = 1;
// echo $integer + $integer; // => 2

// $string = '1';
// echo $string + $string; // => 2 (strings are coerced to integers)

// $string = 'one';
// echo $string + $string; // => 0
// // Outputs 0 because the + operator cannot cast the string 'one' to a number

// // Type casting can be used to treat a variable as another type

// $boolean = (boolean) 1; // => true

// $zero = 0;
// $boolean = (boolean) $zero; // => false

// There are also dedicated functions for casting most types
// $integer = 5;
// $string = strval($integer);
// var_dump($string);


// $var = null; // Null value