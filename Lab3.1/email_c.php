<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>

<?php
$email="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=$_POST['useremail'];
    }

    ?>

    <form method="POST" action="" enctype="">
        <fieldset>
            <legend>Email</legend>
            <input type="email" name="useremail" id="" placeholder="Enter your email" value="<?php echo $email; ?>"><hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <br>
    
    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "Your entered email is : ".$email;
    }

    ?>

</body>
</html>