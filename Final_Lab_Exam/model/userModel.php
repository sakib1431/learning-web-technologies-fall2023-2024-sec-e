<?php

    require_once('db.php');

    function login($username, $password){
        $con = getConnection();
        $sql = "SELECT * FROM employers WHERE username='{$username}' AND password='{$password}'";

        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if ($user){
            $userData = array(
                'success' => true,
                'id' => $user['id'],
                'username' => $user['username'],
                'type' => $user['type']    
            );
            return $userData;
        } else {
            return array('success' => false);
        }
    } 
    
    function adminReg($admindata)
    {
        $conn = getConnection();

        $adminname = $admindata['a1'];
        $contact_no = $admindata['a2'];
        $username = $admindata['a3'];
        $password = $admindata['a4'];

        $sql = "INSERT INTO employers (employer_name, contact_no, username, password, type)
        VALUES ('$adminname', '$contact_no', '$username', '$password', 'admin');";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            return true;
        }
        else{
            return false;
        }
    }

    function employerReg($empdata) 
    {
        $conn = getConnection();
    
        $en = $empdata['e1'];
        $ecompn = $empdata['e2'];
        $econn = $empdata['e3'];
        $eun = $empdata['e4'];
        $ep = $empdata['e5'];
    
        $sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password)
        VALUES ('$en', '$ecompn', '$econn', '$eun', '$ep');";
    
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function getAllUser(){
        $con = getConnection();
        $sql = "SELECT * FROM employers";
        $result = mysqli_query($con, $sql);
        $info = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($info, $user); // Corrected variable name
        }
        
        return $info;
    }

    function deleteUser($userId) {
        $conn = getConnection();
    
        $sql = "DELETE FROM employers WHERE id = $userId";
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function searchemp($username){
        $conn = getConnection();
    
        $sql = "SELECT * FROM employers WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $userinfo = mysqli_fetch_assoc($result);
        
        return $userinfo;
        
    }
    function searchempById($userId) {
        $conn = getConnection();
    
        $sql = "SELECT * FROM employers WHERE id = $userId";
        $result = mysqli_query($conn, $sql);
        $userInfo = mysqli_fetch_assoc($result);
    
        return $userInfo;
    }
    

    
    function updateUser($updateData) {
        $conn = getConnection();
    
        $id = $updateData['id'];
        $employer_name = $updateData['employer_name'];
        $company_name = $updateData['company_name'];
        $contact_no = $updateData['contact_no'];
        $username = $updateData['username'];
        $password = $updateData['password'];
        $type = $updateData['type'];
    
        $sql = "UPDATE employers SET 
                employer_name = '$employer_name',
                company_name = '$company_name',
                contact_no = '$contact_no',
                username = '$username',
                password = '$password',  -- Keep the password as is
                type = '$type'
                WHERE id = $id";
    
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            header('Location: ../view/home.php');
            exit();
        } else {
            die('Error: ' . mysqli_error($conn));
        }
    }
    
    
    ?>
    