<?php
require_once('../Controller/sessioncheck.php');

// Assuming you have the user data available in the session or cookies

echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr><td colspan='2' align='CENTER'>Profile</td></tr>
        <tr><td>ID</td><td>" . (isset($_COOKIE['id']) ? $_COOKIE['id'] : '') . "</td></tr>
        <tr><td>USER NAME</td><td>" . (isset($_COOKIE['username']) ? $_COOKIE['username'] : '') . "</td></tr>
        <tr><td>EMAIL</td><td>" . (isset($_COOKIE['email']) ? $_COOKIE['email'] : '') . "</td></tr>
        <tr><td>MOBILE NO</td><td>" . (isset($_COOKIE['mobile']) ? $_COOKIE['mobile'] : '') . "</td></tr>
        <tr><td>NAME</td><td>" . (isset($_COOKIE['name']) ? $_COOKIE['name'] : '') . "</td></tr>
        <tr><td>GENDER</td><td>" . (isset($_COOKIE['gender']) ? $_COOKIE['gender'] : '') . "</td></tr>
        <tr><td colspan='2' align='right'><a href='user_home.php'>Go Home</a></td></tr>
    </table>";
?>
