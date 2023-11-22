<?php 
session_start();
require_once('../model/usersmodel.php');

$id = $_POST['id'];
$password = $_POST['password'];

if (empty($id) || empty($password)) {
    echo "Null username/password!";
} else {
    // Call a function to validate login
    $status = loginUser($id, $password);

    if ($status) {
        $_SESSION['flag'] = "true";
        header("location: ../view/user_home.php");
    } else {
        echo "Invalid user!";
    }
}
?>
