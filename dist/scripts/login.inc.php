<?php

if(isset($_POST['login-submit'])){
    require 'database/db.php';

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = $_POST['password'];

    if( empty($username) || empty($password) ){
        header("Location: ../login.php?error=true");
        exit();
    }elseif($username == 'admin' || $username == 'Admin' || $username == 'ADMIN'){

        $query = "SELECT * FROM admin WHERE username = '$username'";

        if($result = mysqli_query($conn, $query)){
            $row = mysqli_fetch_assoc($result);
            $passwordVerify = password_verify($password, $row['password']);

            if($passwordVerify == false){
                header('Location: ../login.php?error=true');
                exit();
            }else if($passwordVerify == true){
                session_start();
                $_SESSION['adminUser'] = $row['username'];
                header('Location: ../admin/home.admin.php?success=true');
                exit();
            }

        }else{
            echo 'Error:' . mysqli_error($conn);
        }


    }else{

        $query = "SELECT * FROM user WHERE username = '$username'";

        if($result = mysqli_query($conn, $query)){
            $row = mysqli_fetch_assoc($result);
            $passwordVerify = password_verify($password, $row['password']);

            if($passwordVerify == false){
                header('Location: ../login.php?error=true');
                exit();
            }else if($passwordVerify == true){
                session_start();
                $_SESSION['userId'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['phone'] = $row['phone'];
                header('Location: ../index.php?success=true');
                exit();
            }

        }else{
            echo 'Error:' . mysqli_error($conn);
        }
    }
} else{
    header('Location: ../signup.php');
    exit();
}