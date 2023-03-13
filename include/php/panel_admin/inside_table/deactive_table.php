<?php

require_once "load_table_name.php";

function deactive_table($table, $pdo){
    $flaga = 1;
    if(!isset($table)){
        echo "Zabezpieczenie przed nadużyciem pliku deactive_table.php";
        $flaga = 0;
    }
    if(load_isset_table_not_return($table, $pdo) != $table){
        echo "Zabezpieczenie przed nadużyciem pliku deactive_table.php";
        $flaga = 0;
    }
    if ($flaga == 1){
        try
        {
            $querty_select = "SELECT name_table, flaga FROM info_table WHERE name_table = '$table'";
            $flaga = $pdo ->query($querty_select) or die('Błąd zapytania SELECT pliku');
            $row = $flaga->fetch();
            if($row['flaga'] == 0){
             echo "Zestaw został już wcześniej deaktywowany";
             header("Location: tryb_edycji.php?zestaw=$table");
            }

            $querty = "UPDATE info_table SET flaga = '0' WHERE name_table = '$table' ";
            $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
            //echo $tabela. " zmodyfikowano na 0 czyli aktywny";
            header("Location: tryb_edycji.php?zestaw=$table");
        
        }
        catch(PDOException $e)
        {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        echo '</br><a href="tryb_edycji.php?zestaw='.$table.'">wróć</a>';
        }    
    }

}

?>