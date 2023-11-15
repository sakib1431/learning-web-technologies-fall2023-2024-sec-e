<?php
require_once("../Controller/sessioncheck.php");
require_once("../model/usersmodel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $id = $_COOKIE["id"];

    // Update user information in the database
    $success = updateProfile($id, $username, $email, $mobile, $name, $gender);

    if ($success) {
        // Update cookies with new information
        setcookie('username', $username, time() + 3600, '/');
        setcookie('email', $email, time() + 3600, '/');
        setcookie('mobile', $mobile, time() + 3600, '/');
        setcookie('name', $name, time() + 3600, '/');
        setcookie('gender', $gender, time() + 3600, '/');

        header('Location: ../view/user_home.php'); // Redirect to the profile page
        exit();
    } else {
        echo 'Failed to update profile. Please try again.';
    }
} else {
    header('Location: profile.php'); // Redirect if accessed directly
    exit();
}
?>
