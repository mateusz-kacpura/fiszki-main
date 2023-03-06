<?php
session_start();
if(isset($_SESSION['fiszki_login'])&&isset($_SESSION['fiszki_password'])){
    unset($_SESSION['fiszki_login']);
    unset($_SESSION['fiszki_password']);
    header('location: index.php');
}
else{
    header('location: index.php');
}
?>
