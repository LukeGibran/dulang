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
        <form action="user_info.php">
            <div class="first-part">
                <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" id="" required>
                </div>

                <div class="form-control">
                <label for="number">Phone Number</label>
                <input type="text" name="number" id="" required>
                </div>
                
                <div class="form-control">
                <label for="location">Address</label>
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

            <div class="btns">
            <a href="choose.php" class="btn-link"><i class="fas fa-arrow-left"></i>Back</a>
                <button type="submit" class="btn-sub" >Submit</button>
            </div>
        </form>
    </div>
</body>
</html>