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
<body id="login">
<div class="box">
  <h2>Login</h2>

  <?php if(isset($_GET['error'] )) {
    $error = $_GET['error'];
    $message = 'Wrong credentials!';

  echo '<span class="error" ><i class="fas fa-exclamation-triangle"></i>'.$message. '</span>';
  } elseif (isset($_GET['success'])) {
    $message = 'Signing up success!';
    echo '<span class="success" ><i class="fas fa-check"></i>'.$message. '</span>';
  }
  ;?>

  <form action="scripts/login.inc.php" method="post">
    <div class="inputBox">
      <input type="text" name="username" id="" required>
      <label for="">Username</label>
    </div>
  <div class="inputBox">
    <input type="password" name="password" id="" required>
      <label for="">Password</label>
    </div>
    <a href="index.php" class="btn-link"><i class="fas fa-arrow-left"></i>Back</a>
    <input type="submit" value="submit" name="login-submit">
   
  </form>
</div>
<a href="signup.php" class="signup-link">Don't have an account? Sign up here.</a>
</body>
</html>