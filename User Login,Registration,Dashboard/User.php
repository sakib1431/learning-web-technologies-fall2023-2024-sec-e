<html>
<head>
	<title>User</title>
</head>
<body>
    <center>
    <?php
        session_start();
        echo "<h1>Hello {$_SESSION['Name']}</h1>";
    ?>
    <h4>User DashBoard</h1>
    <a href="profile.php">Profile</a><br>
    <a href="changepass.php">Update Password</a><br>
    <a href="logout.php">LogOut</a><br>
    </center>
	

</body>
</html>