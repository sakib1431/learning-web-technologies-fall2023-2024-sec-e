<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $gender = $_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    // Validation rules
    if (strlen($username) < 2) {
        echo "";
    }

    if (strlen($password) < 8 || !preg_match('/[@#$%]/', $password)) {
        echo "";
    }


}
?>