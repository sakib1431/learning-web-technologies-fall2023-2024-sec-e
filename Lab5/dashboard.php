<?php
    include('sessioncheck.php');
?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <header>
        <img src="xcompany.png" alt="X Company Logo" >
        <section style="text-align: right; ">
            Logged in as <a href="viewprofile.php"><?php echo $_COOKIE['Name']; ?></a>|
            <a href="logout.php">Logout</a>
        </section>
    </header>
    <section style="width: 100%; height: auto;display: flex;">
    <div style="height: 100%;width: 20%;">
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
    
    <div style="width: auto;">
        <h2>Welcome <?php echo $_COOKIE['Name']; ?></h2>
    </div>
    </section>

    <footer>
        <p style="text-align: center;">Copyright @ 2017</p>
    </footer>
</body>
</html>
