<?php
// https://stackoverflow.com/questions/15757750/how-can-i-call-php-functions-by-javascript

require_once "../load_table_fishcards.php";

$table = $_POST["Txt_Nombre"];
$correo = $_POST["Txt_Corro"];

switch($_POST["functionname"]){ 

    case 'load_table_fishcards': 
        load_table_fishcards($table, $pdo);
        break;      
} 
?>