<?php
include('../baza.php');
if(!$connect){
    header('location: ../index.php');
}
    global $connect;
    $db_name=$_POST['word_operation'];   
   // $query = "drop table $db_name";
    $db = mysqli_select_db($connect,'fiszki_nauka_slowek');
    $result=mysqli_query($connect,$query);
header('location: ../fiszki.php');
?>s
