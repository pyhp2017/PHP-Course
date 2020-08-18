<html>
<head>
<script>
function showUser(id) 
{
  if (id == "")
  {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  else
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Video32Data.php?id="+id,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>


<form>
    <select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>

<?php

$servername = "localhost";
$username = "ahmad";
$password = "password";
$dbname = "school";

try
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, name FROM Students");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $parentKey=>$parentValue)
  {
      foreach($parentValue as $key=>$value)
      {
          if($key=="id")
          {
              $idToAdd = $value;
          }
          else if($key == "name")
          {
              $nameToAdd = $value;
              break;
          }
      }

      echo "<option value=$idToAdd>$nameToAdd</option>";
  }


}
catch(PDOException $e) 
{
    echo "<h1>There is something wrong</h1>";
}
$conn = null;
?>


  
    </select>
</form>


<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html> 