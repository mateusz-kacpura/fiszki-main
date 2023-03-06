<?php
if(!isset($_SESSION))      
{         
     session_start();      
} 
if(isset($_SESSION['fiszki_login'])&&isset($_SESSION['fiszki_password'])){
$connect = mysqli_connect('localhost',$_SESSION['fiszki_login'],$_SESSION['fiszki_password']);
    if (!$connect){
    unset($_SESSION['fiszki_login']);
    unset($_SESSION['fiszki_password']);
    header('location: index.php');
    }
if(!$table=mysqli_select_db($connect,'fiszki_nauka_slowek'))
{
    $query = 'CREATE DATABASE fiszki_nauka_slowek';//zapytanie wyświetlające wszystkie nazwy baz danych
    $result=mysqli_query($connect,$query);
}
}
else{
    $connect=false;
}
?>


