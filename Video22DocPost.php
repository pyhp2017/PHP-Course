<html>

<body>

<?php
if(isset($_POST["name"]) && isset($_POST["email"]))
{
?>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; } ?>

</body>


</html>