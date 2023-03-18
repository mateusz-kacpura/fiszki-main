<?php

// pik powinien opisywac dzialanie pojedynczych slow w tabeli a nie samej tabeli do poprawy
require_once "load_table_name.php";
// plik nigdzie nie uzyty stworzony w celu podziału na pliki pliku tryb_edycji.php
$flaga = 1;
if(!isset($table)){
    echo "Zabezpieczenie przed nadużyciem pliku deactivate_the_word_table.php";
    $flaga = 0;
}
if(load_isset_table_not_return($table, $pdo) != $table){
    echo "Zabezpieczenie przed nadużyciem pliku deactivate_the_word_table.php";
    $flaga = 0;
}
if ($flaga==1){
    try
    {
        $querty = "UPDATE info_table SET flaga = '0' WHERE name_table = '$table' ";

        $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
        //echo $tabela. " zmodyfikowano na 0 czyli aktywny";
        header("Location: tryb_edycji.php?zestaw=$tabela");
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }
}
?>