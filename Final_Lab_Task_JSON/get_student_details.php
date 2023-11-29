<?php
$username = $_GET['username'];
$studentDetails = [
    'username' => 'sakib',
    'email' => 'sakib@gmail.com',
    'password' => '1234',
    'id' => '123456',
    'cgpa' => '3.5',
    'gender' => 'Male',
    'phone' => '01732546538',
    
];

// Send JSON response
header('Content-Type: application/json');
echo json_encode($studentDetails);
?>
