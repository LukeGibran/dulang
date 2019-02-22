<?php
session_start();

if(isset($_SESSION['adminUser'])){
    header('Location: dist/admin/home.admin.php');
}else{
    header('location: dist');

}