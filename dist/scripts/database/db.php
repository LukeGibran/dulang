<?php

$server = 'localhost';
$username = 'luke';
$password = '123abc';
$database = 'dulang';

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("Connection Failed: " .mysqli_connect_error()); 
}
