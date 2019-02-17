<?php

session_start();
require 'database/db.php';

if(isset($_SESSION['userId'])){
    if($_GET['code']){
        $code = $_GET['code'];
    
        $query = "UPDATE  reciept SET status = 'Cancel' WHERE r_code = '$code'";
        if($result = mysqli_query($conn, $query)){
            header('Location:../index.php?message=cancelled');

        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }



}else {
    header('Location: index.php');
}