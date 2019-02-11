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
        <form action="catering.php" method="get">
            <div class="menu">
                <div class="dish-name">
                    <h1 class="menu-title">Buffet Type</h1>
                    <hr>
                </div>

                <div class="dishes">
                    <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="1">
                        <h1 class="menu-name">Set 1</h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 160 / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Beef Steak, Buttered Chicken, Chopsuey/Udang/Sotanghon, Leche Flan, Rice/Yellow rice, Softdrinks, Free h20</p>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="2">
                        <h1 class="menu-name">Set 2</h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 160 / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Beef Steak, Buttered Chicken, Chopsuey/Udang/Sotanghon, Leche Flan, Rice/Yellow rice, Softdrinks, Free h20</p>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="3">
                        <h1 class="menu-name">Set 3</h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 160 / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Beef Steak, Buttered Chicken, Chopsuey/Udang/Sotanghon, Leche Flan, Rice/Yellow rice, Softdrinks, Free h20</p>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list">
                        <input type="radio" name="menu" id="#" value="4">
                        <h1 class="menu-name">Set 4</h1>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 160 / pax</span></h2>
                        <h3 class="menu-dishes">Dishes: </h3>
                        <p class="menu-dish">Beef Steak, Buttered Chicken, Chopsuey/Udang/Sotanghon, Leche Flan, Rice/Yellow rice, Softdrinks, Free h20</p>
                        <span class="bg"></span>
                    </label>
                </div>
            </div>
            <div class="addons">
                <div class="dish-name">
                    <h1 class="addons-title">Maligay</h1>
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
            </div>
            
            <div class="btns">
            <a href="choose.php" class="btn-link"><i class="fas fa-arrow-left"></i>Back</a>
            <button type="submit" class='btn-sub'>Submit</button>
            </div>
        </form>
    </main>
</body>
</html>