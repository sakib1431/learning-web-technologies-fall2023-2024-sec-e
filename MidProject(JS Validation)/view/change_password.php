<?php require_once('../Controller/sessioncheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHANGE PASSWORD</title>
</head>
<body>
	<center>
		<form action="../controller/changepass.php" method="post" enctype="">
			<table border="0" cellspacing="0" cellpadding="5">
				<tr>
					<td>
						<fieldset>
							<legend>CHANGE PASSWORD</legend>
							Current Password<br />
							<input type="password" name="current" value="" /><br />
							New Password<br />
							<input type="password" name="new" value=""/><br />
							Retype New Password<br />
							<input type="password" name="confirm" value=""/>								
							<hr />
							<input type="submit" value="Change" />     
							<a href="user_home.php">Home</a>						
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>