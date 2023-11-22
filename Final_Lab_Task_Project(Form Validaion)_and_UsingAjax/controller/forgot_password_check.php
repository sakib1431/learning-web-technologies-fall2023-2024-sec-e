<?php
require_once('../model/usersmodel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];

    // Validate the input data (you can add more validation)

    // Check if the ID and username match the records in the database
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE id='{$id}' AND username='{$username}'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            // User found, redirect to the password reset page
            header("Location: ../view/password_reset.php?id=$id");
            exit();
        } else {
            // User not found or combination of ID and username not correct
            echo "Invalid combination of ID and username.";
        }
    } else {
        // Error in the query
        echo "Error: " . mysqli_error($con);
    }
}
?>
