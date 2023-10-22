<?php
    include('sessioncheck.php');
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $gender = $_POST["Gender"];
    $dob = $_POST["dob"];

    setcookie('Name', $name, time() + 1800); 
    setcookie('Email', $email, time() + 1800);
    setcookie('Gender', $gender, time() + 1800);
    setcookie('DOB', $dob, time() + 1800);

   
    header("Location:viewprofile.php");
    exit;
}
?>

<html>
<head>
    <title>EDIT PROFILE</title>
</head>
<body>
    <header>
        <img src="xcompany.png" alt="X Company Logo">
        <section style="text-align: right; ">
            Logged in as <a href="viewprofile.php"><?php echo $_COOKIE['Name']; ?></a>|
            <a href="logout.php">Logout</a>
        </section>
    </header>
    <section style="width: 100%; height: auto;display: flex;" >
    <div style="width: 25%">
        <h4>Account</h4>
        <hr>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="viewprofile.php">View Profile</a></li>
            <li><a href="editprofile.php">Edit Profile</a></li>
            <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>  
    </div>
    
    <div style=" width: 60%;">
            <fieldset style="display: flex;">
                <legend><h4>EDIT PROFILE</h4></legend>
                <div style="height: 100%;width: 100%;">
                    <form action="" method="POST">
                    Name: <input type="text" name="Name" value="<?php echo $_COOKIE['Name']; ?>"><hr>
                    Email: <input type="text" name="Email" value="<?php echo $_COOKIE['Email']; ?>"><hr>
                    Gender: 
                    <input type="radio" name="Gender" value="Male" <?php if ($_COOKIE['Gender'] === 'Male') echo 'checked'; ?>>Male
                    <input type="radio" name="Gender" value="Female" <?php if ($_COOKIE['Gender'] === 'Female') echo 'checked'; ?>>Female
                    <input type="radio" name="Gender" value="Other" <?php if ($_COOKIE['Gender'] === 'Other') echo 'checked'; ?>>Other
                    <hr>
                    Date of Birth: <input type="date" name="dob" value="<?php echo $_COOKIE['DOB']; ?>"><hr>
                    <input type="submit" value="Submit">
                    </form>
                </div>
               
            </fieldset>
       
    </div>
    </section>
    <footer >
        <p style="text-align: center;">Copyright © 2017</p>
    </footer>
</body>
</html>