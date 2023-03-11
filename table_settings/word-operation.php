<?php
/*
include('../baza.php');
if(!$connect){
    header('location: ../index.php');
}

$select_database=$_POST['select_database'];
$value1=$_POST['value1'];
$value2=$_POST['value2'];
$query_type=$_POST['query_type'];
$query_scope=$_POST['query_scope'];

$query="SELECT count(id) as ilosc FROM $select_database";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_assoc($result);
$count =  $data['ilosc'];

function insert(){
global $select_database,$value1,$value2,$query_type,$query_scope;
           
        if(!empty($value1)&&!empty($value2)){
            if($query_scope=='NULL'){
                return $query = "INSERT INTO $select_database (id, v1, v2, weight) values (NULL,'$value1','$value2','1')";
            }
        }
    }
    
    switch($query_type){
        case 'INSERT':{
    global $count;
    mysqli_query($connect,insert());
    echo "Dodałem wartość $count do tabeli: ".$_POST['select_database'];
        }; break;
    }


*/
require_once "../polaczeniePDO.php";

try
{
    $select_database=$_POST['select_database'];
    $value1=$_POST['value1'];
    $value2=$_POST['value2'];
    $query_type=$_POST['query_type'];
    $query_scope=$_POST['query_scope'];

    $query="SELECT count(id) as ilosc FROM $select_database";
    $result = $pdo -> query($query); 
    $date = $result->fetch(PDO::FETCH_ASSOC); // działanie powinno odpowiadać funkcji fetch_asoc->($result); 
    $count = $date['islosc'];
    echo $count;
            
}
catch(PDOException $e)
{
    echo 'Połączenie nie mogło zostać utworzone: PLIK WORD-OPERATION ' . $e->getMessage();
}    


?>