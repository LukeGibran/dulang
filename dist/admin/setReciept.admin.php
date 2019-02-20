<?php 
session_start();
require '../scripts/database/db.php';

if(isset($_SESSION['adminUser'])){
    $code = $_GET['code'];
    $verdict = $_GET['verdict'];

    if($verdict == 'confirm'){
        $query = "UPDATE reciept SET status = 'confirm' WHERE r_code ='$code'";

        if($result = mysqli_query($conn, $query)){
            header('Location: home.admin.php?message=success');
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    } elseif($verdict = 'cancel'){
        $query = "UPDATE reciept SET status = 'cancel' WHERE r_code = '$code'";

        if($result = mysqli_query($conn, $query)){
            header('Location: home.admin.php?message=cancel');
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }
} else{
    header('Location: index.php');
}