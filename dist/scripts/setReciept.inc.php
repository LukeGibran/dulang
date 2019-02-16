<?php

session_start();

require 'database/db.php';

if(isset($_GET['update'])){
    $code = $_GET['code'];
    $type = $_GET['type'];

    $_SESSION['update_code'] = $code;
    $_SESSION['update_type'] = $type;


    header("Location: ../$type.php");


} elseif(isset($_GET['remove'])){
    echo 'remove';
}