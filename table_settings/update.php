<?php
include('../baza.php');
if(!$connect){
    header('location: ../index.php');
}
$select_database=$_POST['select_database'];
$value1=$_POST['value1'];
$value2=$_POST['value2'];
$id=$_POST['id'];
$query = "UPDATE $select_database SET v1 = '$value1', v2 = '$value2' WHERE `$select_database`. id = '$id'";      
mysqli_query($connect,$query);
echo 'Zmieniłem wartość słówka o id = '.$id . $query; 


?>
