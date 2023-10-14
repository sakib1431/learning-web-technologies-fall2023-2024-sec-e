<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET['uname'];
    $password = $_GET['password'];

    // Validation rules
    $usernameRegex = '/^[A-Za-z0-9._-]{2,}$/';
    $passwordRegex = '/^(?=.*[@#$%]).{8,}$/';

    if (!preg_match($usernameRegex, $username)) {
        echo "Invalid Username. Please enter a valid username.";
    } elseif (!preg_match($passwordRegex, $password)) {
        echo "Invalid Password. Please enter a valid password.";
    } else {
        // Replace this part with your validation logic
        echo "Validation successful!";
    }
}
?>
