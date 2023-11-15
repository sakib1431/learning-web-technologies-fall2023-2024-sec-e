<?php require_once('../Controller/sessioncheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
</head>
<body>
    <center>
        <form action="../controller/edit_profilecheck.php" method="post">
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <td colspan="2" align="CENTER">Edit Profile</td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td><?php if (isset($_COOKIE['id'])) { echo $_COOKIE['id']; } ?></td>
                </tr>
                <tr>
                    <td>USER NAME</td>
                    <td><input type="text" name="username" value="<?php if (isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>"></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="text" name="email" value="<?php if (isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>"></td>
                </tr>
                <tr>
                    <td>MOBILE NO</td>
                    <td><input type="text" name="mobile" value="<?php if (isset($_COOKIE['mobile'])) { echo $_COOKIE['mobile']; } ?>"></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="name" value="<?php if (isset($_COOKIE['name'])) { echo $_COOKIE['name']; } ?>"></td>
                </tr>
                <tr>
                    <td>GENDER</td>
                    <td>
                        <select name="gender">
                            <option value="Male" <?php if (isset($_COOKIE['gender']) && $_COOKIE['gender'] === 'Male') { echo 'selected'; } ?>>Male</option>
                            <option value="Female" <?php if (isset($_COOKIE['gender']) && $_COOKIE['gender'] === 'Female') { echo 'selected'; } ?>>Female</option>
                            <option value="Other" <?php if (isset($_COOKIE['gender']) && $_COOKIE['gender'] === 'Other') { echo 'selected'; } ?>>Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input type="submit" value="Save Changes">
                        <a href="user_home.php">Go Home</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
