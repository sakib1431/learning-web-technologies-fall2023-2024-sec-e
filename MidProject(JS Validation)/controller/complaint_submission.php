<?php
require_once('../model/usersmodel.php');
require_once('../Controller/sessioncheck.php')
require_once "../view/lodge_complaint.php";

// Assuming you have sessioncheck.php included here or handle session in some way

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted
    if(isset($_POST['complaint']) && !empty($_POST['complaint'])) {
        $complaint = $_POST['complaint'];

        // You may want to perform additional validation and sanitation here

        // Store the complaint in a file, database, or handle it as per your application logic
        // For demonstration, let's save it to a text file
        $complaintFile = fopen("complaints.txt", "a"); // Open file in append mode
        fwrite($complaintFile, $_COOKIE['name'] . ": " . $complaint . "\n");
        fclose($complaintFile);

        // Redirect the user back to the home page or any other desired location
        header("Location: ../view/user_home.php");
        exit;
    } else {
        // Handle the case where the complaint is not provided
        echo "Please enter a valid complaint!";
    }
}
?>

