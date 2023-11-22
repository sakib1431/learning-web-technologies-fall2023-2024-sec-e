<?php require_once('../Controller/sessioncheck.php'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lodge Complaint</title>
</head>

<body>
    <center>
        <h1>Lodge Complaint</h1>
        <form method="post" action="complaint_submission.php">
            <label for="complaint">Enter your complaint:</label><br>
            <textarea id="complaint" name="complaint" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Submit Complaint">
            <a href="user_home.php">Home</a>
        </form>
    </center>
</body>

</html>