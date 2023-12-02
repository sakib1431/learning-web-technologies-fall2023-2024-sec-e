<?php
require_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $updateData = array(
        'id' => $id,
        'employer_name' => $employer_name,
        'company_name' => $company_name,
        'contact_no' => $contact_no,
        'username' => $username,
        'password' => $password,
        'type' => $type
    );

    if (updateUser($updateData)) {
        header('Location: ../view/adminHome.php'); // Redirect to the admin page after successful update
        exit(); // Ensure that no further code is executed after the redirection
    } else {
        echo "Failed to update user.";
    }
}

// Fetch the user details for pre-filling the form
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $userId = $_GET['id'];
    $userInfo = searchempById($userId);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update User</title>
    </head>
    <body>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $userId ?>">
            <label>Employer Name:</label>
            <input type="text" name="employer_name" value="<?= $userInfo['employer_name'] ?>"><br>

            <label>Company Name:</label>
            <input type="text" name="company_name" value="<?= $userInfo['company_name'] ?>"><br>

            <label>Contact No:</label>
            <input type="text" name="contact_no" value="<?= $userInfo['contact_no'] ?>"><br>

            <label>User Name:</label>
            <input type="text" name="username" value="<?= $userInfo['username'] ?>"><br>

            <label>Password:</label>
            <input type="password" name="password" value="<?= $userInfo['password'] ?>"><br>

            <label>User Type:</label>
            <input type="text" name="type" value="<?= $userInfo['type'] ?>"><br>

            <input type="submit" value="Update">
        </form>
    </body>
    </html>
<?php
}
?>
