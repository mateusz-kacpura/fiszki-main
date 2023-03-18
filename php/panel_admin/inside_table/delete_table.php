<?php

require_once "filter.php";

function delete_table($table, $pdo){
    try
    {
        $table=filtruj($_POST['word_operation']);   
        $drop_table = "drop table $table";
        $pdo ->query($drop_table) or die('Błąd zapytania');
        header('location: ./fiszki.php');
    }
    catch(PDOException $e)
    {
    echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    header('location: ./index.php');
    }
}

?>