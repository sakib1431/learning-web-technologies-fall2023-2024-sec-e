<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
</head>
<body>
    <center>
        <form action="../controller/forgot_password_check.php" method="post">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend><h3>Forgot Password</h3></legend>
                            User ID<br/>
                            <input type="text" name="id" value=""><br/>
                            Username<br/>
                            <input type="text" name="username" value=""><br/>
                            <br /><hr/>
                            <input type="submit" value="Submit">
                            <a href="login.php">Back to Login</a>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
