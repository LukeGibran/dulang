<?php 
session_start();

if(isset($_SESSION['userId'])){

    if(isset($_GET['code'])){

        require ('scripts/database/db.php');

        $code = $_GET['code'];
        $id = $_SESSION['userId'];
        $query = "SELECT * from reciept WHERE r_code = '$code' AND user_id = '$id'";

        if($result = mysqli_query($conn, $query)){
            $row = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_close($conn);
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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body id="checkout">
    <div class="c-wrapper">
        <h1 class="checkout-title">Your Receipt</h1>
        <div class="btns">
        <a href="#" target="_blank" class="btn-print"><i class="fas fa-print"></i> Print</a>
        <a href="index.php"  class="btn-home"><i class="fas fa-home"></i> Home</a>
        </div>

        <div class="components"> <!-- Components -->
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
                    <h3 class="u-name"><?php echo $_SESSION['name']; ?></h3>
                    <h3 class="u-event"><?php echo $row['event']; ?></h3>
                    <h3 class="u-order"><?php echo $row['menu']; ?> <span class="price">₱ <?php echo $row['menu_price']; ?></span></h3>
                    <h3 class="u-addons"><?php echo $row['addon']; ?> <span class="price">₱ <?php echo $row['addon_price']; ?></span></h3>
                    <h3 class="u-date"><?php echo date('F-d-Y', strtotime($row['event_date']));?></h3>
                    <h3 class="u-time"><?php echo $row['event_time']; ?></h3>
                    <h3 class="u-guest"><?php echo $row['no_guest']; ?></h3>
                    <h3 class="u-status"><?php echo $row['status']; ?></h3>
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
            </div> <!-- end of receipt -->
            </div>
            <div class="information">
                <div class="info-order">
                    <form action="#">
                        <label for="order_id">Check Order Details</label>
                        <input type="text" name="order_id"  id="order">
                        <button class="btn-green" type="submit">View</button>
                    </form>
                </div>
            </div> <!-- End of Info -->

            <div class="addons">
                <div class="dish-name">
                    <h1 class="addons-title">Recommendations</h1>
                    <hr>
                </div>
                <div class="dishes">
                    <label class="addons-list -catering">
                        <input type="radio" name="addon" value="1" id="" required>
                        <h2 class="addon-title">Set 1</h2>
                        <h3 class="addon-price"><span class="amount">₱ 150 / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Chicken Lollipop, Fried Lumpia, Revel bars, Pancit, Juice/Ice tea</p>
                        <span class="bg"></span>
                    </label>
                    <label class="addons-list -catering">
                        <input type="radio" name="addon" value="2" id="" required>
                        <h2 class="addon-title">Set 2</h2>
                        <h3 class="addon-price"><span class="amount">₱ 150 / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Chicken Lollipop, Fried Lumpia, Revel bars, Pancit, Juice/Ice tea</p>
                        <span class="bg"></span>
                    </label>
                    <label class="addons-list -catering">
                        <input type="radio" name="addon" value="3" id="" required>
                        <h2 class="addon-title">Set 3</h2>
                        <h3 class="addon-price"><span class="amount">₱ 150 / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Chicken Lollipop, Fried Lumpia, Revel bars, Pancit, Juice/Ice tea</p>
                        <span class="bg"></span>
                    </label>
                    <label class="addons-list -catering">
                        <input type="radio" name="addon" value="4" id="" required>
                        <h2 class="addon-title">Set 4</h2>
                        <h3 class="addon-price"><span class="amount">₱ 150 / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Chicken Lollipop, Fried Lumpia, Revel bars, Pancit, Juice/Ice tea</p>
                        <span class="bg"></span>
                    </label>

                </div>
            </div> <!-- end of reccomendations -->

         </div>   <!-- end of components -->

    </div>
</body>
</html>