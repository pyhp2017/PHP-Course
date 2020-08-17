<?php


/**
What is JSON?

JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.

Since the JSON format is a text-based format, it can easily be sent to and from a server, and
used as a data format by any programming language.
 */



// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

// echo json_encode($age);




// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
//The json_decode() function returns an object by default. The json_decode() 
//function has a second parameter,
// and when set to true, JSON objects are decoded into associative arrays.
// var_dump(json_decode($jsonobj , true));




// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);

// echo $obj->Peter;
// echo $obj->Ben;
// echo $obj->Joe;



// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $arr = json_decode($jsonobj, true);

// echo $arr["Peter"];
// echo $arr["Ben"];
// echo $arr["Joe"];



// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);

// foreach($obj as $key => $value) {
//   echo $key . " => " . $value . "<br>";
// }