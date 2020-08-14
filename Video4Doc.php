<?php 
    $name = "Alireza"; 
    $age = 15;
    $job = "student";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 4</title>
</head>
<body>

    <?php echo "<h1>" . "Hello " . strtoupper($name) . "</h1>"; ?>
    <?php echo "<h2>" . "Age: " . $age . "</h2>";
        
        echo "<h3> Job: {$job} </h3>";
    ?>


</body>
</html>