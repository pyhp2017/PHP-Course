<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video10 - 3</title>
</head>
<body>


<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit"">
</form>


<?php

if(isset($_GET['fname']))
{
    echo "Hello " . $_GET['fname'];
}

?>


</body>
</html>