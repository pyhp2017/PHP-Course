<!DOCTYPE html>
<html>
<head>
<style>
table 
{
  width: 100%;
  border-collapse: collapse;
}

table, td, th 
{
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php


$id = intval($_GET['id']);

echo "<table>";
echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>PhoneNumber</th><th>SocialNumber</th></tr>";

class TableRows extends RecursiveIteratorIterator 
{
  function __construct($it) 
  {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() 
  {
    echo "</tr>" . "\n";
  }
}


$servername = "localhost";
$username = "ahmad";
$password = "password";
$dbname = "school";

try
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(is_numeric($id))
  {
    $stmt = $conn->prepare("SELECT id, name, email, phoneNumber, socialNumber FROM Students WHERE id=$id");
  }
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
  {
    echo $v;
  }
}
catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";



?>
</body>
</html>