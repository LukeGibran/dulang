<?php 
session_start();
if(isset($_SESSION['adminUser'])){

    require '../scripts/database/db.php';

    $message_id = $_GET['message'];

    $query = "SELECT * FROM messages ORDER BY date DESC";

    if($result = mysqli_query($conn, $query)){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }else{
        echo 'Error_fetching_all_messages: ' . mysqli_error($conn);
    }


    $query_message = "SELECT * FROM messages WHERE  id = '$message_id'";


    if($result2 = mysqli_query($conn, $query_message)){
        $row_m = mysqli_fetch_assoc($result2);
        $uid = $row_m['user_id'];
        $user_q = "SELECT * FROM user WHERE user_id = '$uid'";

        if($user_r = mysqli_query($conn, $user_q)){
            $user = mysqli_fetch_assoc($user_r);
        } else{
            echo 'Error_fetching_user: ' . mysqli_error($conn);
        }
    }else{
        echo 'Error_fetching_message: ' . mysqli_error($conn);
    }

}else{
    header('Location: ../index.php');
}



    require 'header.admin.php';
?>

    <?php 
    if(isset($_GET['sent'])){
        $sent = $_GET['sent'];

    if($sent){
        echo '<div class="modal green">
        <h3><i class="fas fa-check"></i> Reply Sent!</h3>
        </div>' ;}
    }
     ?>
    <aside>
        <div class="aside-wrapper">
            <a href="../logout.php" class="home-link"><i class="fa fa-sign-out-alt"></i> Logout</a>
            <div class="message-part">
                <a href="home.admin.php" class="aside-link-new">Dashboard <i class="fas fa-tachometer-alt"></i></a>
               
                <ul class="aside-messages">
                <h3 class="message-title">User Feedbacks</h3>

                <?php if(!$rows) echo '<h4 style="color:#fff;">No feedbacks yet</h4>' ?>
                <?php foreach($rows as $row): ?>
                <li class="aside-message  <?php if($row['id'] == $_GET['message']) echo 'selected'; ?>"><a href="feedback.admin.php?message=<?php echo $row['id']; ?>" class="aside-link"><i class="fas fa-arrow-circle-right"></i> <?php echo $row['subject']; ?></a></li>
                <?php endforeach; ?>

                    <!-- <li class="aside-message"><a href="viewFeedback.php" class="aside-link"><i class="fas fa-arrow-circle-right"></i> </a></li> -->
                </ul>
            </div>
        </div>
    </aside>
    <main>
        <div class="main-wrapper">
        <div class="user-feedback">
                <h1>Your Feedback</h1>
                <h2><span>Subject:</span> <?php echo $row_m['subject']; ?></h2>
                <h3><span>From: </span><?php echo $user['name']; ?></h3>
                <p><?php echo $row_m['message']; ?></p>
            </div>
            <div class="admin-feedback">
                <h1>Reply</h1>
                <h3><span>From: </span>Admin</h3>
                <p>
                <?php if(!$row_m['reply']){
                ?>
                <form action="sendMessage.admin.php" method="post">
                    <div class="form-group">
                        <input type="text" name="message_id" value="<?php echo $message_id; ?>" id="" hidden>
                        <textarea name="message" id="" cols="30" rows="10" required></textarea>
                    </div>

                    <button type="submit" class="btn-sub" name="msg-sub">Submit</button>
                </form>
                <?php
                }
                else{
                    echo $row_m['reply'];
                } 
                ?>
                </p>
            </div>
        </div>
    </main>
    <script src="../js/admin.js"></script>
</body>
</html>