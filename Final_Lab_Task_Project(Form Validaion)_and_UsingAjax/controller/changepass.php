<?php
session_start();
require_once "../model/usersmodel.php";

$currentpassword = $_REQUEST['current'];
$password = $_REQUEST['new'];
$conpassword = $_REQUEST['confirm'];

if ($currentpassword == '' || $password == '' || $conpassword == '') {
    echo 'All Fields must be filled.';
} elseif (strlen($password) < 4) {
    echo 'Password should be at least 4 characters.';
} elseif ($password !== $conpassword) {
    echo 'Passwords do not match.';
} else {
    $status = changeUserPassword($currentpassword, $password);
    if ($status) {
        header("Location: ../view/user_home.php");
    } else {
        echo 'Incorrect password.';
    }
}
?>
