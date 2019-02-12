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
        <h2 class="event-type">Round (Good for 25pax)</h2>
        <form action="packlunch.php" class="select_type">
            <select name="pax" id="">
                <option value="round">Round</option>
                <option value="oblong">Oblong</option>
                <option value="Rectangle">Rectangle</option>
            </select>
            <button type="submit" class='btn-sub'>Submit</button>
        </form>
        <form action="packlunch.php" method="get">
            <div class="menu">
                <div class="dish-name">
                    <h1 class="menu-title packlunch selected" id="beefSelect">Beef</h1>
                    <h1 class="menu-title packlunch" id="chickSelect">Chicken</h1>
                    <h1 class="menu-title packlunch" id="seaSelect" >Seafood</h1>
                    <hr>
                </div>

                <div class="dishes" id="beef">
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="1">
                        <h2 class="menu-name">Tiyula Itum</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="2">
                        <h2 class="menu-name">Kulma</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="3">
                        <h2 class="menu-name">Kari-Kari</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="4">
                        <h2 class="menu-name">Beef Steak</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                </div>
                <!-- Chicken -->          
                <div class="dishes hide" id="chicken">
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="5">
                        <h2 class="menu-name">Chicken Teriyaki</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>

                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="7">
                        <h2 class="menu-name">Chicken Adobo</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="8">
                        <h2 class="menu-name">Fried Chicken</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                </div>

                <!-- Seafood -->
                <div class="dishes hide" id="seafood">
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="9">
                        <h2 class="menu-name">Shrimp w/ Garlic</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="10">
                        <h2 class="menu-name">Sweet & Spicy Fish</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="11">
                        <h2 class="menu-name">Camaron Rebusado</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="12">
                        <h2 class="menu-name">Squid Barbeque</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                    <label class="menu-list packlunch">
                        <input type="radio" name="menu" id="#" value="12">
                        <h2 class="menu-name">Squid Barbeque</h2>
                        <hr>
                        <h2 class="menu-price"> <span class="amount">₱ 2,500</span></h2>
                        <span class="bg"></span>
                    </label>
                </div>
                <!-- end -->
            </div>
            <div class="addons">
                <div class="dish-name">
                    <h1 class="addons-title">Addons</h1>
                    <hr>
                </div>
                <div class="dishes">
                    <label class="addons-list">
                        <input type="radio" name="addon" value="1" id="" required>
                        <h2 class="addon-title">Bihon</h2>
                        <h3 class="addon-price"><span class="amount">₱ 2,500</span></h3>
                        <span class="bg"></span>
                    </label>
                    <label class="addons-list">
                        <input type="radio" name="addon" value="2" id="">
                        <h2 class="addon-title">Sotanghon</h2>
                        <h3 class="addon-price"><span class="amount">₱ 2,500</span></h3>
                        <span class="bg"></span>
                    </label>
                    <label class="addons-list">
                        <input type="radio" name="addon" value="3" id="">
                        <h2 class="addon-title">Pancit Udang</h2>
                        <h3 class="addon-price"><span class="amount">₱ 2,500</span></h3>
                        <span class="bg"></span>
                    </label>
                    <label class="addons-list">
                        <input type="radio" name="addon" value="4" id="">
                        <h2 class="addon-title">Veggies</h2>
                        <h3 class="addon-price"><span class="amount">₱ 2,500</span></h3>
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

    <script src="js/packlunch.js"></script>
</body>
</html>