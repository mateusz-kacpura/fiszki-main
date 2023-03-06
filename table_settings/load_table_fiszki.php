<?php
include('../baza.php');
if(!$connect){
    header('location: ../index.php');
}
if($_POST['table']!=''){
$table=$_POST['table'];
$query = "select * from $table";
$result=mysqli_query($connect,$query);
 while ($row = mysqli_fetch_assoc($result)) {
echo '<script>array1.push("'.$row['v1'].'");array2.push("'.$row['v2'].'");weight.push("'.$row['weight'].'")</script>';
}
}
else{
    header('location: ../fiszki.php');
}
?>