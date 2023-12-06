<?php

    require_once('db.php');
    function insertUser($user){
        $con = getConnection();
        $sql = "insert into user values('{$user['Id']}', '{$user['Password']}','{$user['Name']}',  '{$user['Email']}', '{$user['Type']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function login($user){
        $con = getConnection();
        $sql = "select * from user where Id = '{$user['Id']}' and Password = '{$user['Password']}'";
        $status = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($status);
        return $user;
    }

    function searchbyname($user){
        $con = getConnection();
        $sql = "select * from user where Name = '{$user['Name']}'";
        $status = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($status);
        return $user;
    }

    function changePass($user){
        $con = getConnection();
        print_r($user);
        $sql = "UPDATE user set Password = '{$user['Password']}' where Name = '{$user['Name']}'";
        $status = mysqli_query($con, $sql);
        print_r($status);
        return $status;
    }
    

    function alluser(){
        $con = getConnection();
        $sql = "select * from user";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }

?>