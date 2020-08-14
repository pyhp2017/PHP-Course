<?php

//Php Tag
// everything outside of a pair of opening and closing tags is ignored by the PHP parser. 

//Escaping from HTML 

// Everything outside of a pair of opening and closing tags is 
// ignored by the PHP parser which allows PHP files to have mixed content. 
// This allows PHP to be embedded in HTML documents, for example to create templates.

// phpinfo(); --> for information
// php -i


/* php -a The -a option provides an interactive shell,
 similar to ruby’s IRB or python’s interactive shell. 
There are a number of other useful command line options, too.
*/


//Write Simple CLI Program
$name = $argv[1];
echo "Hello World, \n Hello $name \n";
// $argc is an integer variable containing the argument count 
// and $argv is an array variable containing each argument’s value.
// The first argument is always the name of your PHP script file, in this case hello.php.

// -----> Hello World in doc example