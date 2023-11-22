<?php
require_once('../model/usersmodel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $newPassword = $_POST["new_password"];

    // Check if the ID is valid
    if (isValidUserId($id, getConnection())) {
        // Update the user's password
        if (updatePassword($id, $newPassword, getConnection())) {
            // Redirect to a success page after updating the password
            header("Location: ../view/password_reset_success.php");
            exit();
        } else {
            echo "Failed to update password.";
        }
    } else {
        // Invalid user ID
        echo "Invalid user ID.";
    }
}
?>
