<?php
    include('sessioncheck.php');
?>
<html>
<head>
    <title>VIEW PROFILE</title>
</head>
<body>
    <header>
        <img src="xcompany.png" alt="X Company Logo">
        <section style="text-align: right; ">
            Logged in as <a href="viewProfile.php"><?php echo $_COOKIE['Name']; ?></a>|
            <a href="logout.php">Logout</a>
        </section>
    </header>
    <section style="width: 100%; height: auto;display: flex;" >
    <div style="width: 20%">
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
    
    <div style=" width: 50%;">
            <fieldset style="display: flex;">
                <legend><h4>PROFILE</h4></h4></legend>
                <div style="height: 100%;width: 200px;">
                    Name: <?php echo $_COOKIE['Name']; ?><br><hr>
                    Email: <?php echo $_COOKIE['Email']; ?><br><hr>
                    Gender: <?php echo $_COOKIE['Gender']; ?><br><hr>
                    Date of Birth: <?php echo $_COOKIE['DOB']; ?><br><hr>
                    <a href="editProfile.php">Edit Profile</a>
                </div>
                <div style="height: 100%;width: 40px; margin-left: 100px;">
                    <img src="personimage.png" alt="Profile Picture here">
                    <a href="changeprofilepicture.php">Change</a>
                </div>
            </fieldset>
       
    </div>
    </section>
    <footer>
        <p style="text-align: center;">Copyright © 2017</p>
    </footer>
</body>
</html>
