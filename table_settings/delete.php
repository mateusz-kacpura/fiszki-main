<?php
include('../baza.php');
if(!$connect){
    header('location: ../index.php');
}
$select_database=$_POST['select_database'];
$id=$_POST['id'];
$query = "DELETE FROM $select_database WHERE id = '$id'";      
mysqli_query($connect,$query);
echo 'Usunięto słówko o id = '.$id; 
?>
