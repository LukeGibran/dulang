<?php 
session_start();
require 'database/db.php';

if(isset($_POST['checkout-order'])){

    


function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return "dulang$randomString";
}
    $total = 0;
    $id = $_SESSION['userId'];
    $number = $_POST['number'];
    $type = $_SESSION['type'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guest = $_POST['guest'];
    $menu = $_POST['menu'];
    $menu_p = $_POST['menu_price'];
    $addon = $_POST['addon'];
    $addon_p = $_POST['addon_price'];
    $rcode = generateRandomString();
    if($type == 'wedding' || $type == 'packlunch'){
        $total = $menu_p + $addon_p;
    } else if($type == 'catering'){
        $total = ($menu_p + $addon_p) * $guest;
    }
    $status = 'Pending';

    $query = "INSERT INTO reciept(user_id, event, event_date, event_time, menu, menu_price, addon, addon_price, no_guest, event_location, total, status, r_code) VALUES($id, '$type', '$date', '$time', '$menu', $menu_p, '$addon', $addon_p, $guest, '$location',$total, '$status', '$rcode')";

    if($result = mysqli_query($conn, $query)){

        header('Location: ../checkout.php?code='.$rcode);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }


    mysqli_close($conn);

}