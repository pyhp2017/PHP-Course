<?php

/**********************
*  Error Handling
*
*/


// Simple error handling can be done with try catch block

try 
{
    // Do something
} 
catch (Exception $e) 
{
    // Handle exception
}

// When using try catch blocks in a namespaced environment it is important to
// escape to the global namespace, because Exceptions are classes, and the
// Exception class exists in the global namespace. This can be done using a
// leading backslash to catch the Exception.

try {
    // Do something
} catch (\Exception $e) {
    // Handle exception
}



// Custom exceptions

class MyException extends Exception {}

try {

    $condition = true;

    if ($condition) {
        throw new MyException('Something just happened');
    }

} catch (MyException $e) {
    // Handle my exception
}