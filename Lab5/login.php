
<html>
<head>
    <title>LOG IN</title>
</head>
<body>
    <header>
        <img src="xcompany.png" alt="X Company Logo">
        <section style="text-align: right;">
        <a href="publichome.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
        </section>
        
    </header>
    <tr>
            <td colspan = "2">
                <form method="post" action="logincheck.php" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        User Name: <input type="text" name="username" value="" /> <br>
                        Password: <input type="password" name="password" value="" /> <br>
                        <hr>
                        <input type="checkbox" name="remember_me" id="checkbox">
                        <label for="checkbox"> Remember Me</label><br>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="forgetPassword.php">Forget Password?</a>
                    </fieldset>
                </form>
            </td>
        </tr>
    <footer>
        <p style="text-align: center;">Copyright © 2017</p>
    </footer>
</body>
</html>