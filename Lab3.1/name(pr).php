<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<body>

    <?php
$name="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST['username'];
    }
    ?>

    <form method="POST" action="" enctype="">
    <fieldset>
        <legend>Name</legend>
        <input type="text" name="username" id="" placeholder="Enter your name" value="<?php echo $name; ?>"><br><hr>
        <input type="submit" value="Submit">
    </fieldset>
    </form>
    <br>
    
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Your name is : ".$name;
    }
    ?>

</body>
</html>