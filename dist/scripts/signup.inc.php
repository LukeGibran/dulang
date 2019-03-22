<?php

if(isset($_POST['signup-submit'])){
    require 'database/db.php';

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $pw1 = $_POST['password'];
    $pw2 = $_POST['r-password'];

    if(empty($name) || empty($username) || empty($number) || empty($pw1) || empty($pw2)){
        header("Location: ../signup.php?error=emptyfields");
        exit();
    }else if($pw1 != $pw2){
        header("Location: ../signup.php?error=passwords");
        exit();
    } else{

        $query_check = "SELECT * FROM user WHERE username = '$username'";
        $result_check = mysqli_query($conn, $query_check);
        if(mysqli_num_rows($result_check) > 0 || $username == 'admin'){
            header('Location: ../signup.php?error=username');
            exit();
        } else {
            $password = password_hash($pw1, PASSWORD_DEFAULT);
            $query = "INSERT INTO user(name, username, address, phone, password) VALUES('$name','$username', '$address', '$number','$password')";
    
            if(mysqli_query($conn, $query)){
                header('Location: ../login.php?success=true');
            }else{
                echo 'Error:' . mysqli_error($conn);
            }
        }


    }
} else{
    header('Location: ../signup.php');
    exit();
}