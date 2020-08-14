<?php

/**
* Control Structures == > < <= >= !=
*/

// $x = 10;
// if ($x == 10)
// {
//    print "\nI get printed";
// }
// else
// {
//     echo "else block";
// }

// if (false) {
//    print 'I don\'t';
// } else {
//    print 'I get printed';
// }





//Example:
$t = date("H");
// echo $t;


// if ($t < "20") 
// {
//   echo "Have a good day!";
// } 
// else 
// {
//   echo "Have a good night!";
// }



// if (false) {
//    print 'Does not get printed';
// } elseif (true) {
//    print 'Does';
// }

// //Example

// [10 , 15] 
// $number = 20;

// if($number>=10 && $number<=15)
// {
//     echo "Try Again";
// }
// else if($number>15 && $number<=18)
// {
//     echo "Nice job";
// }
// else if ($number>18 && $number<=20)
// {
//     echo "Perfect !";
// }
// else
// {
//     echo "Fail";
// }



//  if ($t < "10")
//   {
//     echo "Have a good morning!";
//   }
//   elseif ($t < "20") 
//   {
//     echo "Have a good day!";
//   } 
//   else 
//   {
//     echo "Have a good night!";
//   }




// ternary operator

// $boolean = false;
// $x;
// if($boolean)
// {
//     $x = 'NOT';
//     print 'Does not get printed';
// }
// else
// {
//     $x = 'YES';
//     print 'Does';
// }

// $x = $boolean ? 'YES' : 'NOT';

// print ($boolean ? 'Does not get printed' : 'Does');

// // ternary shortcut operator since PHP 5.3
// equivalent of "$x ? $x : 'Does'"
// $x = false;
// $x = ($x ? $x : 'NOT');
// $x = ($x ?: 'NOT');


// // null coalesce operator since php 7
// $a = null;
// $b = 'Does print';
// echo $a ?? 'a is not set'; // prints 'a is not set'
// echo $b ?? 'b is not set'; // prints 'Does print'


// $x = 0;
// var_dump($x);
// var_dump('0');
// if ($x === '0') 
// {
//     print 'Does not print';
// } 
// elseif ($x == '1') 
// {
//     print 'Does not print';
// } 
// else {
//     print 'Does print';
// }



// // Use switch to save some logic.
// $favcolor = "black";


// switch ($favcolor) 
// {
//   case "red":
//     echo "Your favorite color is red!";    
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }


