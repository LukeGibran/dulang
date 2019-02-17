<?php 
if(isset($_POST['msg-sub'])){
   session_start();
   require 'database/db.php';
   if(isset($_SESSION['userId'])){
       $subject = $_POST['subject'];
       $message = $_POST['message'];
       $id = $_SESSION['userId'];

       $query = "INSERT INTO messages(user_id, subject, message) VALUES($id, '$subject', '$message')";

       if($result = mysqli_query($conn, $query)){
          header('Location: ../feedback.php?success=true');
       }else{
           echo 'Error: ' . mysqli.error($conn);
       }
   } else{
       header('Location: ../index.php');
   }
} else{
    header('Location: ../feedback.php');
}

