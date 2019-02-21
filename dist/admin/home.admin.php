<?php 
session_start();
if(isset($_SESSION['adminUser'])){

    require '../scripts/database/db.php';

    $query = "SELECT * FROM messages";

    if($result = mysqli_query($conn, $query)){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }


    $query_p = "SELECT * FROM reciept WHERE status = 'pending'";

    if($result2 = mysqli_query($conn, $query_p)){
        $pending = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }

    $query_c = "SELECT * FROM reciept WHERE status = 'confirm'";

    if($result3 = mysqli_query($conn, $query_c)){
        $confirm = mysqli_fetch_all($result3, MYSQLI_ASSOC);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }

    $query_ca = "SELECT * FROM reciept WHERE status = 'cancel'";

    if($result4 = mysqli_query($conn, $query_ca)){
        $cancel = mysqli_fetch_all($result4, MYSQLI_ASSOC);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }

}else{
    header('Location: ../index.php');
}

    if(isset($_GET['message'])){
        $message = $_GET['message'];
    }
    require 'header.admin.php';
?>
    <?php if($message == 'success'){
        echo '<div class="modal green">
        <h3><i class="fas fa-check"></i> Order confirmed!</h3>
        </div>' ;
    } elseif($message == 'cancel'){
        echo '<div class="modal red">
        <h3><i class="fas fa-check"></i> Order cancelled!</h3>
        </div>';
    } elseif ($message == 'reply') {
        echo '<div class="modal green">
        <h3><i class="fas fa-check"></i> Reply Sent!</h3>
        </div>';
    }

     ?>
    <aside>
        <div class="aside-wrapper">
            <a href="../logout.php" class="home-link"><i class="fa fa-sign-out-alt"></i> Logout</a>
            <div class="message-part">
                <a href="#" class="aside-link-new">Dashboard <i class="fas fa-tachometer-alt"></i></a>
               
                <ul class="aside-messages">
                <h3 class="message-title">User Feedbacks</h3>

                <?php if(!$rows) echo '<h4 style="color:#fff;">No feedbacks yet</h4>' ?>
                <?php foreach($rows as $row): ?>
                <li class="aside-message"><a href="feedback.admin.php?message=<?php echo $row['id']; ?>" class="aside-link"><i class="fas fa-arrow-circle-right"></i> <?php echo $row['subject']; ?></a></li>
                <?php endforeach; ?>

                    <!-- <li class="aside-message"><a href="viewFeedback.php" class="aside-link"><i class="fas fa-arrow-circle-right"></i> </a></li> -->
                </ul>
            </div>
        </div>
    </aside>
    <main>
        <div class="main-wrapper">
        <div class="verdicts">
            <h1 id ="pending" class="verdict selected">Pending</h1>
            <h1 id = "confirm" class="verdict">Confirm</h1>
            <h1 id = "cancelled" class="verdict">Cancelled</h1>
            <br>
            <br>    
            <hr>
        </div>
        <!-- PENDING -->
            <div class="orders" id="pending_orders">
            <?php if(!$pending) echo 'No orders yet'; ?>
            <?php foreach($pending as $pending): ?>

            <a href="view.admin.php?<?php echo "code=".$pending['r_code']."&type=pending"; ?>" class="order-link warn">
                <div class="order">
                    <h2><?php echo $pending['r_code']; ?></h2>
                    <h3><?php echo date('F-d-Y', strtotime($pending['datenow'])); ?></h3>
                </div>
            </a>
            <?php endforeach;?>

            </div>
            <!-- CONFIRM -->
            <div class="orders hide" id = "confirm_orders">
            <?php if(!$confirm) echo 'No orders yet'; ?>

            <?php foreach($confirm as $confirm): ?>
            <a href="view.admin.php?<?php echo "code=".$confirm['r_code']."&type=confirm"; ?>" class="order-link success">
                <div class="order">
                    <h2><?php echo $confirm['r_code']; ?></h2>
                    <h3><?php echo date('F-d-Y', strtotime($confirm['datenow'])); ?></h3>
                </div>
            </a>
            <?php endforeach; ?>
            </div>
            <!-- CANCELLED -->
            <div class="orders hide" id = "cancelled_orders">
            <?php if(!$cancel) echo 'No orders yet'; ?>
            <?php foreach($cancel as $cancel): ?>
            <a href="view.admin.php?<?php echo "code=".$cancel['r_code']."&type=cancel"; ?>" class="order-link danger">
                <div class="order">
                    <h2><?php echo $cancel['r_code']; ?></h2>
                    <h3><?php echo date('F-d-Y', strtotime($cancel['datenow'])); ?></h3>
                </div>
            </a>
            <?php endforeach; ?>
            </div>
        </div>
    </main>
    <script src="../js/admin.js"></script>
</body>
</html>