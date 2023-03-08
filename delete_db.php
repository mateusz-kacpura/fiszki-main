<?php

require_once('polaczeniePDO.php');

try
{
    $db_name=$_POST['word_operation'];   
    $drop_table = "drop table $db_name";
    $pdo ->query($drop_table) or die('Błąd zapytania');
    header('location: ./fiszki.php');

}
catch(PDOException $e)
{
   echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   header('location: ./index.php');
}
?>
