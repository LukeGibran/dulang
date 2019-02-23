<?php
session_start();

if(isset($_SESSION['userId'])){
    if(isset($_GET['message'])){
        
        require 'scripts/database/db.php';

        $userId = $_SESSION['userId'];
        $message_id = $_GET['message'];
        $query = "SELECT * FROM messages WHERE user_id = '$userId' ORDER BY date DESC";
    
        if($result = mysqli_query($conn, $query)){
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
        
        $query_message = "SELECT * FROM messages WHERE user_id = '$userId' AND id = '$message_id'";


        if($result2 = mysqli_query($conn, $query_message)){
            $row_m = mysqli_fetch_assoc($result2);
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }

    } else{
        header('Location: feedback.php');
    }
}else{
    header('Location: ../index.php');
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
<body id="feedback">
    <aside>
        <div class="aside-wrapper">
            <a href="index.php" class="home-link"><i class="fas fa-arrow-circle-left"></i> Home</a>
            <div class="message-part">
                <a href="feedback.php" class="aside-link-new">Create new <i class="fas fa-plus-circle"></i></a>
               
                <ul class="aside-messages">
                <h3 class="message-title">Messages</h3>

                <?php foreach($rows as $row): ?>
                <li class="aside-message <?php if($row['id'] == $_GET['message']) echo 'selected'; ?>"><a href="viewFeedback.php?message=<?php echo $row['id']; ?>" class="aside-link"><i class="fas fa-arrow-circle-right"></i> <?php echo $row['subject']; ?></a></li>
                <?php endforeach; ?>
                    <!-- <li class="aside-message"><a href="#" class="aside-link">Message1<i class="fas fa-arrow-right"></i> </a></li> -->

                </ul>
            </div>
        </div>
    </aside>
    <main>
        <div class="main-wrapper">
            <div class="user-feedback">
                <h1>Your Feedback</h1>
                <h2><span>Subject:</span> <?php echo $row_m['subject']; ?></h2>
                <p><?php echo $row_m['message']; ?></p>
            </div>
            <div class="admin-feedback">
                <h1>Reply</h1>
                <h3><span>From: </span>Admin</h3>
                <p>
                <?php if(!$row_m['reply']){
                    echo 'No reply yet';
                }else{
                    echo $row_m['reply'];
                } 
                ?>
                </p>
            </div>

        </div>
    </main>
</body>
</html>