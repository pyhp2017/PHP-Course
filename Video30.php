<?php



# Source: https://www.mysqltutorial.org , https://www.w3schools.com/sql/default.asp

//Databases are everywhere. So what is a database?  
//By definition, a database is merely a structured collection of data.

// The data relating to each other by nature, e.g., a product belonged to a product category
// and associated with multiple tags. Therefore, we use the term relational database.

// In the relational database, we model data like products, categories, tags, etc.,
// using tables. A table contains columns and rows. It is like a spreadsheet.



// SQL stands for the structured query language.

/**
MySQL is a database management system that allows you to manage relational databases. 
It is open source software backed by Oracle. It means you can use MySQL without paying a dime. 
Also, if you want, you can change its source code to suit your needs.
*/



// https://www.mysqltutorial.org/install-mysql/
// https://www.mysqltutorial.org/getting-started-with-mysql/connect-to-mysql-server/




// sudo systemctl status mysql
// sudo mysql -u root -p



// mysql> show databases;


//A database consists of one or more tables.



// $host = 'localhost';
// $dbname = 'classicmodels';
// $username = 'ahmad';
// $password = 'password';

// try 
// {
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     echo "Connected to $dbname at $host successfully.";
// }
// catch (PDOException $pe) 
// {
//     die("Could not connect to the database $dbname :" . $pe->getMessage());
// }




// REMOVE database syntax: DROP DATABASE <name>;

//================== Create Database ==================

// $servername = "localhost";
// $username = "ahmad";
// $password = "password";

// try 
// {
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "CREATE DATABASE school";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Database created successfully<br>";
// }
// catch(PDOException $e)
// {
//     echo $sql . "<br>" . $e->getMessage();
// }
  
// $conn = null;


//================== Create Table ==================

// A database table has its own unique name and consists of columns and rows.

// $servername = "localhost";
// $dbname = "school";
// $username = "ahmad";
// $password = "password";

// try
// {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // sql to create table
//     $sql = "CREATE TABLE Students (
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     phoneNumber INT(12) NOT NULL,
//     socialNumber INT(10) NOT NULL
//     )";
  
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Table Students created successfully";
// } 
// catch(PDOException $e) 
// {
//     echo $sql . "<br>" . $e->getMessage();
// }
  
// $conn = null;




//================== Insert Data ==================


// Here are some syntax rules to follow:

//     The SQL query must be quoted in PHP
//     String values inside the SQL query must be quoted
//     Numeric values must not be quoted
//     The word NULL must not be quoted


// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// //Data
// $name = "Alireza";
// $email = "alireza@yahoo.com";
// $phoneNumber = 91219212;
// $socialNumber = 112233445;
    
// try 
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO Students (name, email, phoneNumber, socialNumber)
//   VALUES ('$name', '$email', $phoneNumber , $socialNumber)";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "New record created successfully";
// }
// catch(PDOException $e) 
// {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;


//================== Insert Multiple Records ==================



// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// //Data
// $names = ["ahmad", "sara" , "reza"];
// $emails = ["ahmad@gmail.com" , "sara@mail.com" , "reza@yahoo.com"];
// $phones = [91017212,91119292,91319213];
// $socials = [118833445,112993445,772233445];

// try 
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    // begin the transaction
//    $conn->beginTransaction();
//    // our SQL statements
//    $conn->exec("INSERT INTO Students (name, email, phoneNumber, socialNumber)
//    VALUES ('$names[0]', '$emails[0]', $phones[0] , $socials[0])");
//    $conn->exec("INSERT INTO Students (name, email, phoneNumber, socialNumber)
//    VALUES ('$names[1]', '$emails[1]', $phones[1] , $socials[1])");
//    $conn->exec("INSERT INTO Students (name, email, phoneNumber, socialNumber)
//    VALUES ('$names[2]', '$emails[2]', $phones[2] , $socials[2])");
 
//    // commit the transaction
//    $conn->commit();
//    echo "New records created successfully";
// }
// catch(PDOException $e) 
// {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;



//================== Prepared Statements ==================

/**
Compared to executing SQL statements directly, prepared statements have three main advantages:

   1-  Prepared statements reduce parsing time as the preparation on the query is done only once 
    (although the statement is executed multiple times)




   2- Bound parameters minimize bandwidth to the server as you need send only the parameters each time, 
    and not the whole query




   3- Prepared statements are very useful against SQL injections, because parameter values, 
   which are transmitted later using a different protocol, need not be correctly escaped.
   If the original statement template is not derived from external input, SQL injection cannot occur.



   Note: If we want to insert any data from external sources (like user input),
   it is very important that the data is sanitized and validated.
 */


// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// try 
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // prepare sql and bind parameters
//   $stmt = $conn->prepare("INSERT INTO Students (name, email, phoneNumber, socialNumber)
//   VALUES (:nameVar, :emailVar, :phoneNumberVar, :socialNumberVar)");


//   $stmt->bindParam(':nameVar', $nameVar);
//   $stmt->bindParam(':emailVar', $emailVar);
//   $stmt->bindParam(':phoneNumberVar', $phoneNumberVar);
//   $stmt->bindParam(':socialNumberVar', $socialNumberVar);


//   // insert a row
//   $nameVar = "Zahra";
//   $emailVar = "zahra@gmail.com";
//   $phoneNumberVar = 12345692;
//   $socialNumberVar = 112233445;
//   $stmt->execute();

//   // insert another row
//   $nameVar = "Mary";
//   $emailVar = "mary@example.com";
//   $phoneNumberVar = 12345999;
//   $socialNumberVar = 666666666;
//   $stmt->execute();

//   echo "New records created successfully";
// } 
// catch(PDOException $e) 
// {
//   echo "Error: " . $e->getMessage();
// }
// $conn = null;



//================== MySQL Select Data ==================

// echo "<html>";
// echo "<body>";
// echo "<table style='border: solid 1px black;'>";
// echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>PhoneNumber</th><th>SocialNumber</th></tr>";

// class TableRows extends RecursiveIteratorIterator 
// {
//   function __construct($it) 
//   {
//     parent::__construct($it, self::LEAVES_ONLY);
//   }

//   function current() {
//     return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
//   }

//   function beginChildren() {
//     echo "<tr>";
//   }

//   function endChildren() 
//   {
//     echo "</tr>" . "\n";
//   }
// }

// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// try 
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
//   $stmt = $conn->prepare("SELECT id, name, email, phoneNumber, socialNumber FROM Students");
//   $stmt->execute();

//   // set the resulting array to associative
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
//   {
//     echo $v;
//   }
// }
// catch(PDOException $e) 
// {
//   echo "Error: " . $e->getMessage();
// }
// $conn = null;
// echo "</table>";
// echo "</body>";
// echo "</html>";


//================== MySQL Select Data ==================


$servername = "localhost";
$username = "ahmad";
$password = "password";
$dbname = "school";

try
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, name, email, phoneNumber, socialNumber FROM Students");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // foreach($stmt->fetchAll() as $key1=>$val1)
  // {
  //   foreach($val1 as $key2=>$val2)
  //   {
  //     echo "$key2 : $val2" . " ==== ";
  //   }
  //   echo "\n";
  // }
  var_dump($stmt->fetchAll());
}
catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage();
}
$conn = null;


//================== PHP MySQL Use The WHERE Clause ==================

// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// try
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $stmt = $conn->prepare("SELECT id, name, email, phoneNumber, socialNumber FROM Students WHERE name='ahmad' and email='ahmad@gmail.com'");
//   $stmt->execute();

//   // set the resulting array to associative
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   var_dump($stmt->fetchAll());
// }
// catch(PDOException $e) 
// {
//   echo "Error: " . $e->getMessage();
// }
// $conn = null;





//================== MySQL Use The ORDER BY Clause ==================

//The ORDER BY clause is used to sort the result-set in ascending or descending order.

// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// try
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $stmt = $conn->prepare("SELECT id, name, email, phoneNumber, socialNumber FROM Students ORDER BY socialNumber");
//   $stmt->execute();

//   // set the resulting array to associative
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   var_dump($stmt->fetchAll());
// }
// catch(PDOException $e) 
// {
//   echo "Error: " . $e->getMessage();
// }
// $conn = null;



//================== PHP MySQL Delete Data ==================


// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// try
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   // sql to delete a record
//   $sql = "DELETE FROM Students WHERE id=3";

//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Record deleted successfully";

// }
// catch(PDOException $e) 
// {
//   echo "Error: " . $e->getMessage();
// }
// $conn = null;



//================== PHP MySQL Update Data ==================


// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";



// try 
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   // Prepare statement
//   $stmt = $conn->prepare("UPDATE Students SET name='Doe' WHERE id=2");

//   // execute the query
//   $stmt->execute();

//   // echo a message to say the UPDATE succeeded
//   echo $stmt->rowCount() . " records UPDATED successfully";
// }
// catch(PDOException $e) 
// {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;





//================== PHP MySQL Limit Data Selections ==================

/**
MySQL provides a LIMIT clause that is used to specify the number of records to return.

The LIMIT clause makes it easy to code multi page results or pagination with SQL, 
and is very useful on large tables. Returning a large number of records can impact on performance.
 */


// $servername = "localhost";
// $username = "ahmad";
// $password = "password";
// $dbname = "school";

// try
// {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $stmt = $conn->prepare("SELECT * FROM Students Orders LIMIT 3");
//   $stmt->execute();

//   // set the resulting array to associative
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   var_dump($stmt->fetchAll());
// }
// catch(PDOException $e) 
// {
//   echo "Error: " . $e->getMessage();
// }
// $conn = null;