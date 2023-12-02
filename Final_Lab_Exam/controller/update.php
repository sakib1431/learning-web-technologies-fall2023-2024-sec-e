<?php

require_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming you have a form in your update.php file with input fields for each attribute
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
        header('Location: ../view/adminHome.php'); // Redirect to the home page after successful update
    } else {
        echo "Failed to update user.";
    }
}

?>
