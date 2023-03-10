<?php

function delete_table($table, $pdo){
    try
    {
        $table=$_POST['word_operation'];   
        $drop_table = "drop table $table";
        $pdo ->query($drop_table) or die('Błąd zapytania');
        header('location: ./fiszki.php');
    }
    catch(PDOException $e)
    {

    }
}

?>