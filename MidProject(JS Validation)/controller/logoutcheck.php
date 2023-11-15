<?php 
    session_start();
    unset($_SESSION['flag']);
    setcookie('name',$name, time() -3600,'/');
    setcookie('id', $id, time() -3600,'/') ;
    setcookie('username', $username, time() -3600,'/') ;
    header('location: ../view/login.php');
?>