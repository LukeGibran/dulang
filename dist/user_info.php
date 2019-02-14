<?php

if(isset($_GET['order-submit'])){

    session_start();
    require ('scripts/database/db.php');

    if(isset($_SESSION['userId'])){
        $name = $_SESSION['name'];
        $phone = $_SESSION['phone'];
        $type = $_SESSION['type'];
        $menu = $_GET['menu'];
        $addon = $_GET['addon'];

       
     /**
      * WEDDING
      */

      if($type == 'wedding'){

        $formenu = "SELECT * from wedding WHERE wed_id = '$menu'";

        if($menu_result = mysqli_query($conn, $formenu)){
            $menu_pick = mysqli_fetch_assoc($menu_result);
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    
    $for_addon = "SELECT * from wedding_addon WHERE waddon_id = '$addon'";

    if($addon_result = mysqli_query($conn, $for_addon)){
        $addon_pick = mysqli_fetch_assoc($addon_result);

    }else{
        echo 'Error: ' . mysqli_error($conn);

    }

      }
    // END WEDDING

    /**
    * CATERING
    */

    elseif ($type == 'catering'){

    
    $formenu = "SELECT * from catering WHERE cat_id = '$menu'";

        if($menu_result = mysqli_query($conn, $formenu)){
            $menu_pick = mysqli_fetch_assoc($menu_result);
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    
    $for_addon = "SELECT * from catering_addon WHERE caddon_id = '$addon'";

    if($addon_result = mysqli_query($conn, $for_addon)){
        $addon_pick = mysqli_fetch_assoc($addon_result);

    }else{
        echo 'Error: ' . mysqli_error($conn);

    }
    } // END CATERING

    /**
    * PACKLUNCH
    */

    else if($type == 'packlunch'){

        $formenu = "SELECT * from packlunch WHERE pack_id = '$menu'";

        if($menu_result = mysqli_query($conn, $formenu)){
            $menu_pick = mysqli_fetch_assoc($menu_result);
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }


    $for_addon = "SELECT * from packlunch_addon WHERE paddon_id = '$addon'";

    if($addon_result = mysqli_query($conn, $for_addon)){
        $addon_pick = mysqli_fetch_assoc($addon_result);

    }else{
        echo 'Error: ' . mysqli_error($conn);

    }
    }
    // END OF PACKLUNCH 

    // Free Result
    mysqli_free_result($formenu,$for_addon);

    // Close Connection
    mysqli_close($conn);
 
    } else{
        header('Location: login.php');
    }
  
} 
else{
    header('Location: index.php');
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
<body id="user_info">
    <div class="wrapper">
        <h1 class="user-title">Order's information</h1>
        <form action="scripts/reciept.inc.php" method="post">
            <div class="first-part">
                <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" id="" value="<?php echo $name; ?>" readonly>
                </div>

                <div class="form-control">
                <label for="number">Phone Number</label>
                <input type="text" name="number" id="" value="<?php echo $phone?>" readonly>
                </div>
                
                <div class="form-control">
                <label for="location">Event Location</label>
                <input type="text" name="location" id="" required>
                </div>
            </div>
            
            <div class="second-part">
                <div class="form-control">
                <label for="time">Time of Event</label>
                <input type="time" name="time" id="" required>
                </div>
                
                <div class="form-control">
                <label for="date">Date of Event</label>
                <input type="date" name="date" id="">
                </div>

                <div class="form-control">
                <label for="guest">Number of Guests</label>
                <input type="number" name="guest" id="" required>
                </div>
            </div>

            <div class="menu">
                <div class="dish-name">
                    <h2 class="menu-title">Your Order:</h2>
                </div>

                <div class="dishes">
                   <?php if($type == 'wedding'):?>
                <label class="menu-list">
                        <input type="text" name="menu" id="#" value="<?php echo $menu_pick['name']; ?>" hidden>
                        <input type="text" name="menu_price" id="#" value="<?php echo $menu_pick['price']; ?>" hidden>
                        <h1 class="menu-name"><?php echo $menu_pick['name']; ?></h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ <?php echo $menu_pick['price']?></span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish"><?php echo $menu_pick['menu'];?></p>
                </label>

                <label class="addons-list -wedding">
                        <input type="text" name="addon" value="<?php echo $addon_pick['name'];?>" id="" hidden>
                        <input type="text" name="addon_price" value="<?php echo $addon_pick['price'];?>" id="" hidden>
                        <h2 class="addon-title"><?php echo $addon_pick['name']; ?></h2>
                        <h3 class="addon-price"><span class="amount">₱ <?php echo $addon_pick['price'] ?></span></h3>
                </label>
                <?php endif; ?>

                <?php if($type == 'catering'): ?>
                <label class="menu-list">
                        <input type="text" name="menu" id="#" value="<?php echo $menu_pick['name']; ?>" hidden>
                        <input type="text" name="menu_price" id="#" value="<?php echo $menu_pick['price']; ?>" hidden>
                        <h1 class="menu-name"><?php echo $menu_pick['name']; ?></h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ <?php echo $menu_pick['price']?> / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish"><?php echo $menu_pick['dishes'];?></p>
                </label>

                <label class="addons-list -catering">
                        <input type="text" name="addon" value="<?php echo $addon_pick['name'];?>" id="" hidden>
                        <input type="text" name="addon_price" value="<?php echo $addon_pick['price'];?>" id="" hidden>
                        <h2 class="addon-title"><?php echo $addon_pick['name']; ?></h2>
                        <h3 class="addon-price"><span class="amount">₱ <?php echo $addon_pick['price'] ?> / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish"><?php echo $addon_pick['dishes']; ?></p>
                </label>
                <?php endif;?>

                <?php if($type == 'packlunch'): ?>
                     <label class="menu-list packlunch" required>
                        <input type="text" name="menu" id="#" value="<?php echo $menu_pick['name']; ?>" hidden>
                        <input type="text" name="menu_price" id="#" value="<?php echo $menu_pick['price']; ?>" hidden>
                        <h2 class="menu-name"><?php echo $menu_pick['name']; ?></h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ <?php echo $menu_pick['price']; ?></span></h2>
                        <span class="bg"></span>
                    </label>

                    <label class="addons-list -wedding">
                         <input type="text" name="addon" value="<?php echo $addon_pick['name'];?>" id="" hidden>
                        <input type="text" name="addon_price" value="<?php echo $addon_pick['price'];?>" id="" hidden>
                        <h2 class="addon-title"><?php echo $addon_pick['name']; ?></h2>
                        <h3 class="addon-price"><span class="amount">₱ <?php echo $addon_pick['price'];?> / pax</span></h3>
                    </label>
                <?php endif;?>

                <!-- <label class="addons-list -catering">
                        <input type="text" name="addon" value="4" id="" hidden>
                        <h2 class="addon-title">Set 4</h2>
                        <h3 class="addon-price"><span class="amount">₱ 150 / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Chicken Lollipop, Fried Lumpia, Revel bars, Pancit, Juice/Ice tea</p>
                </label>

                <label class="addons-list -wedding">
                        <input type="text" name="addon" value="4" id="" hidden>
                        <h2 class="addon-title">Set 4</h2>
                        <h3 class="addon-price"><span class="amount">₱ 150 / pax</span></h3>

                </label> -->
                    
                </div>
            </div>

            <div class="btns">
            <a href="<?php echo $type?>.php" class="btn-link"><i class="fas fa-arrow-left"></i>Back</a>
                <button type="submit" class="btn-sub" name="checkout-order">Confirm</button>
            </div>
        </form>
    </div>
</body>
</html>