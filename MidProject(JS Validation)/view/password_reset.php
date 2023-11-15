<!DOCTYPE html>
<html lang="en">
<head>
    <title>Password Reset</title>
</head>
<body>
    <center>
        <form action="../controller/password_reset_check.php" method="post">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend><h3>Password Reset</h3></legend>
                            New Password<br/>
                            <input type="password" name="new_password" value=""><br/>
                            Confirm New Password<br/>
                            <input type="password" name="confirm_password" value="">
                            <br /><hr/>
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                            <input type="submit" value="Reset Password">
                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
