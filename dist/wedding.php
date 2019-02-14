<?php
    session_start();
    $_SESSION['type'] = 'wedding';

    require ('scripts/database/db.php');

    /*** 
     * For Dulang
    */
    $dulang = "SELECT * from wedding";

    if($result = mysqli_query($conn, $dulang)){
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }
    // End of Mulang

    /**
     * For Maligay
     */

     $maligay = "SELECT * from wedding_addon";
     if($result_m = mysqli_query($conn, $maligay)){
        $maligay_posts = mysqli_fetch_all($result_m, MYSQLI_ASSOC);
        mysqli_free_result($result_m);
        mysqli_close($conn);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }
     // End of Maligay
    

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
        <h1 class="event-title">Wedding</h1>
        <form action="user_info.php" method="get">
            <div class="menu">
                <div class="dish-name">
                    <h1 class="menu-title">Dulang</h1>
                    <hr>
                </div>

                <div class="dishes">

                <?php foreach($posts as $post) : ?>
                <label class="menu-list">
                        <input type="radio" name="menu" value="<?php echo $post['wed_id']; ?>" required>
                        <h1 class="menu-name"><?php echo $post['name'];?></h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ <?php echo $post['price']; ?></span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish"><?php echo $post['menu']; ?></p>
                        <span class="bg"></span>
                    </label>

            <?php endforeach; ?>
                   
                <!-- <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="1">
                        <h1 class="menu-name">Small Dulang</h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Chicken, Shrimps, Squids, Fish,Eggs, Candy, Chocolate, Jah, Panyam, Baulo, Crabs, Rice, Chocolates Attractive & more Decorations</p>
                        <span class="bg"></span>
                    </label> -->
                    
                </div>
            </div>
            <div class="addons">
                <div class="dish-name">
                    <h1 class="addons-title">Maligay</h1>
                    <hr>
                </div>
                <div class="dishes">
                <?php foreach($maligay_posts as $maligay_post): ?>
                    <label class="addons-list">
                        <input type="radio" name="addon" value="<?php echo $maligay_post['waddon_id']; ?>" id="" required>
                        <h2 class="addon-title"><?php echo $maligay_post['name'] ?></h2>
                        <h3 class="addon-price"><span class="amount">₱ <?php echo $maligay_post['price'];?></span></h3>
                        <span class="bg"></span>
                    </label>
                <?php endforeach; ?>
                    <!-- <label class="addons-list">
                        <input type="radio" name="addon" value="1" id="" required>
                        <h2 class="addon-title">Pump Boat</h2>
                        <h3 class="addon-price"><span class="amount">₱ 2,500</span></h3>
                        <span class="bg"></span>
                    </label> -->


                </div>
            </div>
            
            <div class="btns">
            <a href="choose.php" class="btn-link"><i class="fas fa-arrow-left"></i>Back</a>
            <button type="submit" class='btn-sub' name="order-submit">Submit</button>
            </div>
        </form>
    </main>
</body>
</html>