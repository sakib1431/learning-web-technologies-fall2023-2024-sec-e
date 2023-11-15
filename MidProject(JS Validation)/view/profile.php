<?php require_once('../Controller/sessioncheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>profile</title>
</head>
<body>
	<center>
		<table border="1" cellpadding="5" cellspacing="0">
			<tr><td colspan="2" align="CENTER">Profile</td></tr>
			<tr><td>ID</td><td><?php  if(isset($_COOKIE['id'])) {echo $_COOKIE['id'];  }?></tr>
			<tr><td>USER NAME</td><td><?php  if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];  }?></td></tr>	
			<tr><td>EMAIL</td><td><?php  if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];  }?></td></tr>		
			<tr><td>MOBILE NO</td><td><?php  if(isset($_COOKIE['mobile'])) {echo $_COOKIE['mobile'];  }?></td></tr>		
			<tr><td>NAME</td><td><?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?></td></tr>
			<tr><td>GENDER</td><td><?php  if(isset($_COOKIE['gender'])) {echo $_COOKIE['gender'];  }?></td></tr>	
			<tr><td colspan="2" align="right"><a href="user_home.php">Go Home</a></td></tr>
		</table>			
	</center>
</body>
</html>