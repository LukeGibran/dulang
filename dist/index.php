<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <title>Dulang</title>
</head>
<body>
    <main>
        <section id="jumbotron">
            <h1>Dulang</h1>
            <a href="login.php" class="login-link"><i class="fas fa-user"></i> Login</a>
        </section>
        <nav class="navbar">
        <div class="nav-logo">
            <h1>Dulang</h1>
        </div>
        <ul class="nav-items">
            <li class="nav-item"><a href="#" class="nav-link" ><i class="fa fa-home"></i>Home</a> </li>
            <li class="nav-item"> <a href="choose.php" class="nav-link"> <i class="fa fa-edit"></i>Schedule a Reservation</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-address-card"> </i>Sign up</a></li>
        </ul>
        </nav>

        <section id="about">
        <div class="text">
            <div class="heading">
            <h1>About us</h1>
            <h4>The food that makes you feel good!</h4>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro adipisci quia fugit placeat illum ipsa non accusamus ex explicabo consectetur quaerat, earum, fugiat veniam deleniti est. Inventore velit cum alias? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa sunt error, eos excepturi cum aliquam unde saepe distinctio nemo, nesciunt est maiores quos labore officiis facere in vel quis repellat!</p>
        </div>
        <div class="information">
            <div class="info-order">
                <form action="#">
                    <label for="order_id">Check Order Details</label>
                    <input type="text" name="order_id"  id="order">
                    <button class="btn-green" type="submit">View</button>
                </form>
            </div>
            <div class="info-address">
            <p class="box phone" data-name="123-4561"><i class="fa fa-phone"></i>Phone</p>
            <p class="box email" data-name="dulang@gmail.com"><i class="fa fa-envelope"></i>Email</p>
            <p class="box address" data-name="Zamboanga City"><i class="fa fa-location-arrow"></i>Address</p>
            </div>
        </div>
        </section>
    </main>
    <footer>
      copyright DULANG 2019 made with ❤️
    </footer>
</body>
</html>