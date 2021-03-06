<?php
    session_start();
    $_SESSION['type'] = 'catering';

    require ('scripts/database/db.php');

    /*** 
     * For Dulang
    */
    $buffet = "SELECT * from catering";

    if($result = mysqli_query($conn, $buffet)){
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }
    // End of Mulang

    /**
     * For Maligay
     */

     $addons = "SELECT * from catering_addon";
     if($result_m = mysqli_query($conn, $addons)){
        $addons_posts = mysqli_fetch_all($result_m, MYSQLI_ASSOC);
        mysqli_free_result($result_m);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }
     // End of Maligay
    
     $rec = "SELECT * FROM catering WHERE recommendation >= 5 LIMIT 3";
     if($result_r = mysqli_query($conn, $rec)){
        $recommend = mysqli_fetch_all($result_r, MYSQLI_ASSOC);
    }else{
        echo 'Error:' . mysqli_error($conn);
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
<body >
    <main id="event">
        <h1 class="event-title">Catering</h1>
        <div class="home-link">
           <a href="index.php" class='btn-home' name="order-submit"><i class="fas fa-home"></i> HOME</a>
        </div>
        <form action="user_info.php" method="get">
        <div class="choose">
            <div class="menu-choose">
            <div class="menu">
                <div class="dish-name">
                    <h1 class="menu-title">Buffet Type</h1>
                    <hr>
                </div>

                <div class="dishes">
                <?php foreach($posts as $post): ?>
                    <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="<?php echo $post['cat_id']; ?>" required>
                        <h1 class="menu-name"><?php echo $post['name']; ?></h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ <?php echo $post['price']; ?> / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish"><?php echo $post['dishes']; ?></p>
                        <span class="bg"></span>
                    </label>
                <?php endforeach; ?>
                    <!-- <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="1">
                        <h1 class="menu-name">Set 1</h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 160 / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Beef Steak, Buttered Chicken, Chopsuey/Udang/Sotanghon, Leche Flan, Rice/Yellow rice, Softdrinks, Free h20</p>
                        <span class="bg"></span>
                    </label> -->
                </div>
            </div>
            <div class="addons">
                <div class="dish-name">
                    <h1 class="addons-title">Cocktail / Finger foods</h1>
                    <hr>
                </div>
                <div class="dishes">

                <?php foreach($addons_posts as $addon): ?>
                    <label class="addons-list -catering">
                        <input type="radio" name="addon" value="<?php echo $addon['caddon_id']; ?>" id="" >
                        <h2 class="addon-title"><?php echo $addon['name']; ?></h2>
                        <h3 class="addon-price"><span class="amount">₱ <?php echo $addon['price']; ?> / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish"><?php echo $addon['dishes']; ?></p>
                        <span class="bg"></span>
                    </label>
                <?php endforeach; ?>
                    <!-- <label class="addons-list -catering">
                        <input type="radio" name="addon" value="1" id="" required>
                        <h2 class="addon-title">Set 1</h2>
                        <h3 class="addon-price"><span class="amount">₱ 150 / pax</span></h3>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Chicken Lollipop, Fried Lumpia, Revel bars, Pancit, Juice/Ice tea</p>
                        <span class="bg"></span>
                    </label> -->

                </div>
            </div>
            </div>
            <div class="side-choose -catering">
            <div class="menu">
                <div class="dish-name">
                    <h1 class="menu-title">Recommendation</h1>
                    <hr>
                </div>

                <div class="dishes -side">
                <?php foreach($recommend as $recommend): ?>
                    <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="<?php echo $recommend['cat_id']; ?>" required>
                        <h1 class="menu-name"><?php echo $recommend['name']; ?></h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ <?php echo $recommend['price']; ?> / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish"><?php echo $recommend['dishes']; ?></p>
                        <span class="bg"></span>
                    </label>
                <?php endforeach; ?>
                    <!-- <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="1">
                        <h1 class="menu-name">Set 1</h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 160 / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Beef Steak, Buttered Chicken, Chopsuey/Udang/Sotanghon, Leche Flan, Rice/Yellow rice, Softdrinks, Free h20</p>
                        <span class="bg"></span>
                    </label> -->
                </div>
            </div>
            </div>
        </div>
            
            
            <div class="btns">
            <a href="choose.php" class="btn-link"><i class="fas fa-arrow-left"></i>Back</a>
            <?php if(isset($_SESSION['userId'])): ?>
            <button type="submit" class='btn-sub' name='order-submit'>Submit</button>
            <?php endif; ?>
            </div>
        </form>
    </main>
</body>
</html>