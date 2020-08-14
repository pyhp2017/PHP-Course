<?php declare(strict_types=1);


// Define a function with "function":
// function my_function () 
// {
//     return 'Hello';
// }

// echo my_function(); // => "Hello"


// function familyName($fname) 
// {
//   echo "$fname Refsnes.\n";
// }


// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");




// function familyName($fname, $year) 
// {
//     echo "$fname Refsnes. Born in $year \n";
// }

  
//   familyName("Hege", "1975");
//   familyName("Stale", "1978");
//   familyName("Kai Jim", "1983");



    // function addNumber($a , $b)
    // {
    //     return $a + $b;
    // }

    // $x = addNumber(1,3);
    // echo $x;


//   function addNumbers(int $a, int $b) {
//     return $a + $b;
//   }
//   echo addNumbers(5, "5 days");
  // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10



/**
 * 
 * PHP is a Loosely Typed Language

In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. 
Since the data types are not set in a strict sense, you can do things like adding 
a string to an integer without causing an error.
In PHP 7, type declarations were added. This gives us an option to specify 
the expected data type when declaring a function, and 
by adding the strict declaration, it will throw a "Fatal Error" 
if the data type mismatches.
In the following example we try to send both a number and a string to the function without using strict:

To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

In the following example we try to send both a number and a string to the function, 
but here we have added the strict declaration:

<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?> 

 * 

The strict declaration forces things to be used in the intended way.

 */

 
// function addNumbers( $a, $b) {
//     return $a + $b;
//   }
// //   echo addNumbers(5, "5 Number");
//   echo addNumbers();



// PHP Default Argument Value

// strict requirement
// function setHeight($minheight = 50) 
// {
//     echo "The height is : $minheight \n";
//   }
  
//   setHeight(350);
//   setHeight(); // will use the default value of 50
//   setHeight(135);
//   setHeight(80);
 

//   PHP Functions - Returning values
// To let a function return a value, use the return statement:


// strict requirement
// function sum( $x,  $y) 
// {
//     $z = $x + $y;
//     return $z;
//   }
  
//   echo "5 + 10 = " . sum(5, 10) . "<br>";
//   echo "7 + 13 = " . sum(7, 13) . "<br>";
//   echo "2 + 4 = " . sum(2, 4);


/**
 * PHP Return Type Declarations

PHP 7 also supports Type Declarations for the return statement. 
Like with the type declaration for function arguments, by enabling the strict requirement, 
it will throw a "Fatal Error" on a type mismatch.
To declare a type for the function return, add a colon ( : ) and 
the type right before the opening curly ( { )bracket when declaring the function.
In the following example we specify the return type for the function:


     <?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
?> 
 */


// function addNumbers(float $a, float $b) : float 
// {
//     return $a + $b;
// }

//   echo addNumbers(1.2, 5.2);



 /**
    Passing Arguments by Reference

    In PHP, arguments are usually passed by value,
 which means that a copy of the value is used in the 
 function and the variable that was passed into the 
 function cannot be changed.
    When a function argument is passed by reference, 
    changes to the argument also change the variable that was passed in. 
    To turn a function argument into a reference, the & operator is used:

  */


//   function addFive(&$val)
//   {
//       $val +=5;
//   }

//   $val = 10;
//   echo $val;
//   addFive($val);
//   echo $val;

// function add_five(&$value) {
//   $value += 5;
// }

// $num = 2;
// add_five($num);
// echo $num;



// Since PHP 5.3 you can declare anonymous functions;
// $inc = function ($x) 
// {
//     return $x + 1;
// };

// echo $inc(100);


// function foo ($x, $y, $z) 
// {
//     echo "$x - $y - $z";
// }

// // Functions can return functions
// function bar ($x, $y) 
// {
//     // Use 'use' to bring in outside variables
//     return function ($z) use ($x, $y) 
//     {
//         foo($x, $y, $z);
//     };
// }

// $bar = bar('A', 'B');
// $bar('C'); // Prints "A - B - C"



// You can get all the parameters passed to a function
// function parameters() 
// {
//     $numargs = func_num_args();
//     if ($numargs > 0) {
//         echo func_get_arg(0) . ' | ';
//     }
//     $args_array = func_get_args();
//     foreach ($args_array as $key => $arg) {
//         echo $key . ' - ' . $arg . ' | ';
//     }
// }

// parameters('Hello', 'World'); // Hello | 0 - Hello | 1 - World |

// // Since PHP 5.6 you can get a variable number of arguments
// function variable($word, ...$list) {
//     echo $word . " || ";
//     foreach ($list as $item) {
//         echo $item . ' | ';
//     }
// }

// variable("Separate", "Hello", "World"); // Separate || Hello | World |





/**
 * 
PHP Variables Scope

In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

    local
    global
    static

 */


// $x = 5; // global scope

// function myTest() {
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";




// $x = 5; // local scope
// echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// // using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";




// $x = 5;
// $y = 10;

// function myTest() 
// {
//   global $x, $y;
//   $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15



// $x = 5;
// $y = 10;

// function myTest() {
//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// // myTest();
// // echo $y; // outputs 15



// function myTest() 
// {
//     static $x = 0;
//     echo $x;
//     $x++;
// }
  
//   myTest();
//   myTest();
//   myTest();