<?php
include('../baza.php');
if(!$connect){
    header('location: ../index.php');
}
$select_database=$_POST['select_database'];

$value1=$_POST['value1'];
$value2=$_POST['value2'];
$value3=$_POST['value3'];
$query="SELECT count(id) as ilosc FROM $select_database";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_assoc($result);
$count =  $data['ilosc'];
$count = $count+1;
$query = "INSERT INTO $select_database (id, v1, v2, weight, zdanie) values ('$count','$value1','$value2','1', '$value3')";      
mysqli_query($connect,$query);
echo 'Dodałem nowe słówko pod id = '.$count . $select_database . $query  ; 

    


?>
