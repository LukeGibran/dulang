<?php
    session_start();

    $_SESSION['type'] = 'packlunch';

    require ('scripts/database/db.php');


 
function getBeef($pax){
    require ('scripts/database/db.php');

    $menu = "SELECT * FROM packlunch WHERE type = 'beef' AND pax = '$pax'";
    if($result = mysqli_query($conn, $menu)){
        $beef= mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);

        return $beef;
    }else{
        echo 'Error: ' .mysqli_error($conn);
    }

   }

function getChicken($pax){

require ('scripts/database/db.php');
$menu = "SELECT * FROM packlunch WHERE type = 'chicken' AND pax = '$pax'";
if($result = mysqli_query($conn, $menu)){
 $chicken = mysqli_fetch_all($result, MYSQLI_ASSOC);
 mysqli_free_result($result);

 return $chicken;
}else{
 echo 'Error: ' .mysqli_error($conn);
}

}

function getSeafood($pax){
require ('scripts/database/db.php');
$menu = "SELECT * FROM packlunch WHERE type = 'seafood' AND pax ='$pax'";
if($result = mysqli_query($conn, $menu)){
 $seafood = mysqli_fetch_all($result, MYSQLI_ASSOC);
 mysqli_free_result($result);

 return $seafood;
}else{
 echo 'Error: ' . mysqli_error($conn);
}

}

function getAddons($pax){
    require ('scripts/database/db.php');
    $addons = "SELECT * from packlunch_addon WHERE pax = '$pax'";
    if($result_a = mysqli_query($conn, $addons)){
       $addons_posts = mysqli_fetch_all($result_a, MYSQLI_ASSOC);
       mysqli_free_result($result_a);

       return $addons_posts;
   }else{
       echo 'Error: ' . mysqli_error($conn);
   }
}



if(isset($_GET['type-sub'])){
    $pax = $_GET['pax'];

    $beef = getBeef($pax);
    $chicken = getChicken($pax);
    $seafood = getSeafood($pax);
    $addons = getAddons($pax);

}else{
    $pax = 'round';

    $beef = getBeef($pax);
    $chicken = getChicken($pax);
    $seafood = getSeafood($pax);
    $addons = getAddons($pax);

}


$rec = "SELECT * FROM packlunch WHERE recommendation >= 5 ORDER BY recommendation LIMIT 4";
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
        <h1 class="event-title">Packlunch</h1>
        <?php
         if($pax == 'round'){
             echo '<h2 class="event-type">Round (Good for 25pax)</h2>';
         }else if($pax == 'oblong'){
            echo '<h2 class="event-type">Oblong (Good for 75pax)</h2>';
         } elseif ($pax == 'rectangle') {
            echo '<h2 class="event-type">Rectangle (Good for 100pax)</h2>';
         }
        ?>
        <form action="packlunch.php" class="select_type" method="get">
            <select name="pax" id="">
                <option value="round">Round</option>
                <option value="oblong">Oblong</option>
                <option value="rectangle">Rectangle</option>
            </select>
            <button type="submit" class='btn-sub' name="type-sub">Choose</button>
            <a href="index.php" class='btn-sub' name="order-submit"><i class="fas fa-home"></i></a>

        </form>
        <form action="user_info.php" method="get">
        <div class="choose">
            <div class="main-choose">
                    <div class="menu">
                        <div class="dish-name">
                            <h1 class="menu-title packlunch selected" id="beefSelect">Beef</h1>
                            <h1 class="menu-title packlunch" id="chickSelect">Chicken</h1>
                            <h1 class="menu-title packlunch" id="seaSelect" >Seafood</h1>
                            <hr>
                        </div>

                        <div class="dishes" id="beef">
                        
                        <?php foreach($beef as $beef):?>
                    
                            <label class="menu-list packlunch">
                                <input type="radio" name="menu" id="#" value="<?php echo $beef['pack_id'] ?>" required>
                                <h2 class="menu-name"><?php echo $beef['name']; ?></h2>
                                <hr>
                                <h2 class="menu-price"> <span class="amount">₱ <?php echo $beef['price']; ?></span></h2>
                                <span class="bg"></span>
                            </label>

                        <?php endforeach; ?>

                            <!-- <label class="menu-list packlunch">
                                <input type="radio" name="menu" id="#" value="1">
                                <h2 class="menu-name">Tiyula Itum</h2>
                                <hr>
                                <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                                <span class="bg"></span>
                            </label> -->
                        </div>
                        <!-- Chicken -->          
                        <div class="dishes hide" id="chicken">
                        <?php foreach($chicken as $chicken):?>
                    
                            <label class="menu-list packlunch">
                                <input type="radio" name="menu" id="#" value="<?php echo $chicken['pack_id'] ?>" required>
                                <h2 class="menu-name"><?php echo $chicken['name']; ?></h2>
                                <hr>
                                <h2 class="menu-price"> <span class="amount">₱ <?php echo $chicken['price']; ?></span></h2>
                                <span class="bg"></span>
                            </label>

                        <?php endforeach; ?>
                        </div>

                        <!-- Seafood -->
                        <div class="dishes hide" id="seafood">
                        <?php foreach($seafood as $seafood):?>
                    
                            <label class="menu-list packlunch" required>
                                <input type="radio" name="menu" id="#" value="<?php echo $seafood['pack_id'] ?>">
                                <h2 class="menu-name"><?php echo $seafood['name']; ?></h2>
                                <hr>
                                <h2 class="menu-price"> <span class="amount">₱ <?php echo $seafood['price']; ?></span></h2>
                                <span class="bg"></span>
                            </label>

                        <?php endforeach; ?>
                        </div>
                        <!-- end -->
                    </div>
                    <div class="addons">
                        <div class="dish-name">
                            <h1 class="addons-title">Addons</h1>
                            <hr>
                        </div>
                        <div class="dishes">
                        <?php foreach($addons as $addons): ?>
                            <label class="addons-list">
                                <input type="radio" name="addon" value="<?php echo $addons['paddon_id']?>" id="" required>
                                <h2 class="addon-title"><?php echo $addons['name']; ?></h2>
                                <h3 class="addon-price"><span class="amount">₱ <?php echo $addons['price']; ?></span></h3>
                                <span class="bg"></span>
                            </label>
                        <?php endforeach;?>
                            <!-- <label class="addons-list">
                                <input type="radio" name="addon" value="1" id="" required>
                                <h2 class="addon-title">Bihon</h2>
                                <h3 class="addon-price"><span class="amount">₱ 2,500</span></h3>
                                <span class="bg"></span>
                            </label> -->

                        </div>
                    </div>
                
                    </div>

                    <div class="side-choose">
                    <div class="menu">
                        <div class="dish-name">
                            <h1 class="menu-title">Recommendation</h1>
                            <hr>
                        </div>

                        <div class="dishes -side">

                        <?php foreach($recommend as $recommend):?>
                    
                            <label class="menu-list packlunch">
                                <input type="radio" name="menu" id="#" value="<?php echo $recommend['pack_id'] ?>" required>
                                <h2 class="menu-name"><?php echo $recommend['name']; ?></h2>
                                <hr>
                                <h2 class="menu-price"> <span class="amount">₱ <?php echo $recommend['price']; ?></span></h2>
                                <span class="bg"></span>
                            </label>

                        <?php endforeach; ?>
                            
                        </div>
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

    <script src="js/packlunch.js"></script>
</body>
</html>