<?php


// While, do...while and for loops are probably familiar

// $x = 0;
// while($x <= 100) 
// {
//   echo "The number is: $x \n";
//   $x+=10;
// } 


// //

// /*
// Note: In a do...while loop the condition is tested
//  AFTER executing the statements within the loop. 
//  This means that the do...while loop will execute 
//  its statements at least once, even if the condition is false.
//   See example below.
// */

// $i = 0;
// do 
// {
//     echo $i++;
// } 
// while ($i < 5); // Prints "01234"

// echo "\n";




// for ($x = 0; $x <= 100; $x+=10) 
// {
//     echo $x . "\n";
// } // Prints "0123456789"

// echo "\n";



// //Foreach
// // Foreach loops can iterate over arrays


$colors = array("red", "green", "blue", "yellow");

// $i = 0;
// while($i < count($colors))
// {
//     echo $colors[$i]. " \n";
//     $i++;
// }


// foreach ($colors as $value) 
// {
//   echo "$value \n";
// }


// You can iterate over the keys as well as the values
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// foreach($age as $key => $val) 
// {
//   echo "$key = $val \n";
// }



// $i = 0;
// while ($i < 5) 
// {
//     if ($i === 3) 
//     {
//         break; // Exit out of the while loop
//     }
//     echo $i++;
// } // Prints "012"

// for ($i = 0; $i < 5; $i++) {
//     if ($i === 3) 
//     {
//         continue; // Skip this iteration of the loop
//     }
//     echo $i;
// } // Prints "0124"


