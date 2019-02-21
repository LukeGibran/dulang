<?php
session_start();

if(isset($_SESSION['adminUser'])){

    require ('../scripts/database/db.php');

    $message_id = $_POST['message_id'];
    $message =  $_POST['message'];

    $query = "UPDATE messages SET reply = '$message' WHERE id = '$message_id'";

    if($result = mysqli_query($conn, $query)){
        header("Location: home.admin.php?message=reply");

    }else{
        echo 'Erro_sending_message:' . mysqli_error($conn);
    }

} else{
    header('Location: ../index.php');
}