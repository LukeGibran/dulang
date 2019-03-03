<?php 
session_start();

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
}

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
<body id="choose">
    <nav class="navbar">
        <div class="nav-logo">
            <h1>Dulang</h1>
        </div>
        <ul class="nav-items">
            <li class="nav-item"><a href="index.php" class="nav-link" ><i class="fa fa-home"></i>Home</a> </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class="fa fa-edit"></i>Schedule a Reservation</a></li>
            <?php 
                if(isset($_SESSION['username'])){
                    echo '<li class="nav-item"><a href="feedback.php" class="nav-link"><i class="fa fa-envelope"> </i>Feedback</a></li>';
                    echo '<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out-alt"> </i>Log out</a></li>';
                } else{
                    echo '<li class="nav-item"><a href="signup.php" class="nav-link"><i class="fa fa-address-card"> </i>Sign up</a></li>';
                }
            ?>
        </ul>
        </nav>
    <main>
        <div class="wrapper">
            <div class="title"><h1>Choose an Event</h1> <hr></div>
            <div class="images">
                <a href="wedding.php" class="img wedding " data-name="Wedding">
                    <h1>Wedding</h1>
                </a>
                <a href="catering.php" class="img catering" data-name="Catering">
                    <h1>Catering</h1>
                </a>
                <a href="packlunch.php" class="img packlunch" data-name="Packlunch">
                    <h1>Packlunch</h1>
                </a>
            </div>

        </div>
    </main>
    <script src="js/choose.js"></script>
</body>
</html>