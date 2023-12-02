<?php 
    session_start();
    if (
        !isset($_SESSION['aid']) &&
        !isset($_SESSION['ausername']) &&
        !isset($_SESSION['atype'])

        /* ==== when cookie used ====

        !isset($_COOKIE['aid']) &&
        !isset($_COOKIE['aname']) &&
        !isset($_COOKIE['ausername']) &&
        !isset($_COOKIE['atype'])
        
        ========================== */
    ) {
        header('location: ../view/login.php');
    }
?>