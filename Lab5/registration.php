<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $username = $_POST["UserName"];
    $password = $_POST["Password"];
    $confirmPassword = $_POST["ConfirmPassword"];
    $gender = isset($_POST["Gender"]) ? $_POST["Gender"] : "";
    $dob = $_POST["dob"];

    if ($password != $confirmPassword) {
        echo "Please enter password and confirm password correctly.";
    } else {
        setcookie('Name', $name, time() + 1800); 
        setcookie('Email', $email, time() + 1800);
        setcookie('UserName', $username, time() + 1800);
        setcookie('Gender', $gender, time() + 1800);
        setcookie('DOB', $dob, time() + 1800);
        setcookie('Password',$password,time() + 1800);

        header("Location: login.php");
        exit;
    }
}
?>

<html>
<head>
    <title>REGISTRATION</title>
</head>
<body>
    <header>
        <img src="xcompany.png" alt="X Company logo" >
        <section style="text-align: right;">
        <a href="publichome.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
        </section>
        
    </header>
    <form action="" method="Post" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
        <fieldset style="width: 40%;" >
            <legend>REGISTRATION</legend>
            <table style="width: 100%;">
                <tr >
                    <td>Name</td>
                    <td>: <input type="text" name="Name" value=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="text" name="Email" value=""></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td>: <input type="text" name="UserName" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: <input type="password" name="Password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>: <input type="password" name="ConfirmPassword" value="">
                </td>
                </tr>
            </table>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="Gender" value="Male">Male
                <input type="radio" name="Gender" value="Female">Female
                <input type="radio" name="Gender" value="Other">Other
            </fieldset>
            <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="dob" value="">  mm dd yyyy <br>
            </fieldset>
            <hr>
            <input type="Submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </form>
    <footer>
        <p style="text-align: center;">Copyright © 2017</p>
    </footer>
</body>
</html>