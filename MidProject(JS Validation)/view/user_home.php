
<?php require_once('../Controller/sessioncheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>USER HOME</title>
</head>
<body>
	<center>
	    <h2>Complaint Management System</h2>
		<p>User Profile</p>
		<hr>
		<h3>Welcome <?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?>!</h3>
		<a href="profile.php">View Profile</a>
		<br/>
		<a href="edit_profile.php">Edit Profile</a>
		<br/>
		<a href="lodge_complaint.php">Lodge Complaint</a>
		<br/>
		<a href="change_password.php">Change Password</a>
		<br/>
		<a href="../controller/logoutcheck.php">Logout</a>
	</center>
</body>
</html>