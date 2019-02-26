<?php 
session_start();
require 'database/db.php';

if(isset($_POST['checkout-order'])){

        function generateRandomString($length = 7) {
            $characters = '0123456789'; //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return "$randomString";
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
            $rec = $_SESSION['rec'];
            $newRec = $rec + 1;    
            $menu_id = $_SESSION['menu_id'];

if(isset($_SESSION['update_code'])){

    $update_code = $_SESSION['update_code'];

    // remove existing

    $remove = "DELETE FROM reciept WHERE r_code ='$update_code'";
    if($result3 = mysqli_query($conn, $remove)){

        $query = "INSERT INTO reciept(user_id, event, event_date, event_time, menu, menu_price, addon, addon_price, no_guest, event_location, total, status, r_code) VALUES($id, '$type', '$date', '$time', '$menu', $menu_p, '$addon', $addon_p, $guest, '$location',$total, '$status', '$update_code')";
    

        if($result = mysqli_query($conn, $query)){
            unset($_SESSION['update_code']);
            header('Location: ../viewReciept.php?code='.$update_code);
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }


    
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }




    
  

} else{
    
        $query = "INSERT INTO reciept(user_id, event, event_date, event_time, menu, menu_price, addon, addon_price, no_guest, event_location, total, status, r_code) VALUES($id, '$type', '$date', '$time', '$menu', $menu_p, '$addon', $addon_p, $guest, '$location',$total, '$status', '$rcode')";
    
        if($type == 'wedding'){
            $setRec = "UPDATE wedding SET recommendation = '$newRec' WHERE wed_id = '$menu_id'";
        } elseif ($type == 'catering') {
            $setRec = "UPDATE catering SET recommendation = '$newRec' WHERE cat_id = '$menu_id'";  
        }elseif($type == 'packlunch'){
            $setRec = "UPDATE packlunch SET recommendation = '$newRec' WHERE pack_id = '$menu_id'";
        }

        if($result = mysqli_query($conn, $query)){
        
            header('Location: ../checkout.php?code='.$rcode);
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
        
        if($result2 = mysqli_query($conn, $setRec)){
        
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
}   

    



    mysqli_close($conn);

}