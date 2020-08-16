<?php
    namespace Video24;
    require_once 'Video24Class.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 24</title>
</head>
<style>
.error {color: #FF0000;}
</style>
<body>

    <?php
        //Form Object
        $form = new Form("","","","");
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $form->setForm($_POST['name'],$_POST['email'],$_POST['website'],$_POST['comment']);
        }
    ?>




    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Name: <input type="text" name="name">
        <span class="error">* <?php  echo $form->getNameErr();?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $form->getEmailErr();?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $form->getWebsiteErr();?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit">  

    </form>


    <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST" && $form->valid) 
        {
            echo "<h2>Result: </h2>";
            echo "<br>";
            echo "<h3>" . "Name: " . $form->getName() . "</h3>";
            echo "<br>";
            echo "<h3>" . "Email: " . $form->getEmail() . "</h3>";
            echo "<br>";
            echo "<h3>" . "Website: " . $form->getWebsite() . "</h3>";
            echo "<br>";
            echo "<h3>" . "Comment: " . $form->getComment() . "</h3>";
            
        }


    ?>


</body>
</html>