<?php
session_start();
if(isset($_SESSION['userId'])){
  header('Location: index.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dulang</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body id="signup">
<div class="box">
  <h2>Signup</h2>

  <?php if(isset($_GET['error'] )) {
    $error = $_GET['error'];
    if($error == 'passwords'){
      $message = 'Passwords do not match';
    }else if($error == 'username'){
      $message = 'Username taken';
    }
    else{
      $message = 'Empty Fields';
    }

  echo '<span class="error" ><i class="fas fa-exclamation-triangle"></i>'.$message. '</span>';
  }
  ;?>
  

  <form action="scripts/signup.inc.php" method="post">
    <div class="inputBox">
      <input type="text" name="name" id="" required>
      <label for="">Complete Name</label>
    </div>
    <div class="inputBox">
      <input type="text" name="username" id="" required>
      <label for="">Username</label>
    </div>
    <div class="inputBox">
      <input type="text" name="address" id="" required>
      <label for="">Address</label>
    </div>
    <div class="inputBox">
      <input type="text" name="number" id="" required>
      <label for="">Phone Number</label>
    </div>
  <div class="inputBox">
    <input type="password" name="password" id="" required>
      <label for="">Password</label>
    </div>
    <div class="inputBox">
    <input type="password" name="r-password" id="" required>
      <label for="">Repeat Password</label>
    </div>
    <a href="index.php" class="btn-link"><i class="fas fa-arrow-left"></i>Back</a>
    <input type="submit" value="submit" name="signup-submit">
   
  </form>
</div>
</body>
</html>