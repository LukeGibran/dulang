
<?php 
session_start();

if(isset($_SESSION['adminUser'])){

    if(isset($_GET['code'])){

        require ('../scripts/database/db.php');

        $code = $_GET['code'];
        $query = "SELECT * from reciept WHERE r_code = '$code'";

        if($result = mysqli_query($conn, $query)){
            $row = mysqli_fetch_assoc($result);
            $userId = $row['user_id'];
            $query_user = "SELECT * FROM user WHERE user_id = '$userId' LIMIT 1";

            if($result_u = mysqli_query($conn, $query_user)){
                $user = mysqli_fetch_assoc($result_u);

            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }

    } else{
        header('Location: index.php');
    } 
        
} else {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dulang</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/all.min.css">
</head>
<body id="print" onload="window.print()">
    <div class="reciept-bg">
            <div class="reciept">
                <div class="reciept-info">
                    <h1 class="r-title">Dulang Catering Services</h1>
                    <h3 class="r-place">Zamboanga City</h3>
                    <h3 class="r-number">Tel no: 123-45671</h3>
                    <h3 class="r-email">dulangcatering@gmail.com</h3>
                    <h3 class="r-date"><?php echo date('F-d-Y H:i:s', strtotime($row['datenow'])); ?></h3>
                </div>
                <div class="user-info">
                    <div class="user-placeholder">
                    <h3>Receipt Code:</h3>
                    <h3>Name:</h3>
                    <h3>Event:</h3>
                    <h3>Order: </h3>
                    <h3>Addons: </h3>
                    <h3>Date: </h3>
                    <h3>Time: </h3>
                    <h3>Guest no: </h3>
                    <h3>Status: </h3>
                    </div>

                    <div class="user-value">
                    <h3 class="u-code"><span class="code"><?php echo $row['r_code']; ?></span></h3>
                    <h3 class="u-name"><?php echo $user['name']; ?></h3>
                    <h3 class="u-event"><?php echo $row['event']; ?></h3>
                    <h3 class="u-order"><?php echo $row['menu']; ?> <span class="price">₱ <?php echo $row['menu_price']; ?></span></h3>
                    <h3 class="u-addons"><?php echo $row['addon']; ?> <span class="price">₱ <?php echo $row['addon_price']; ?></span></h3>
                    <h3 class="u-date"><?php echo date('F-d-Y', strtotime($row['event_date']));?></h3>
                    <h3 class="u-time"><?php echo $row['event_time']; ?></h3>
                    <h3 class="u-guest"><?php echo $row['no_guest']; ?></h3>
                    <?php 
                    if($row['status'] == 'pending' || $row['status'] == 'Pending'){
                        echo '<h3 class="u-status warn">PENDING</h3>';
                    } elseif($row['status'] == 'confirm' || $row['status'] == 'Confirm'){
                        echo '<h3 class="u-status success">CONFIRMED</h3>';
                    } elseif($row['status'] == 'cancel' || $row['status'] == 'Cancel'){
                        echo '<h3 class="u-status danger">CANCELLED</h3>';
                    }
                    ?>
                    </div>
                    <div class="total-info">
                        <div class="total-placeholder">
                            <h2>TOTAL:</h2>
                        </div>
                        <div class="total-value">
                        <h1 class="t-amount">₱ <?php echo $row['total']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            echo "<meta http-equiv='refresh' content='0;url=home.admin.php?'>";
        ?>
</body>
</html>