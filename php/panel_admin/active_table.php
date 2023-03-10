<?php
function active_table($table, $pdo){
    /* :: tutaj zmieniam flagę w bazie danych
        ---------------------------
       - id - name_table - flaga -
       ---------------------------
       -  1 -   Unit_1   -   1   -  
       -    -            -       -
       ---------------------------  */
       
       try
       {
           $querty = "UPDATE info_table SET flaga = '1' WHERE name_table = '$table' ";
           $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
           //echo $tabela. " zmodyfikowano na 1 czyli aktywny";
       header("Location: tryb_edycji.php?zestaw=$table");
         
       }
       catch(PDOException $e)
       {

       }   
}
?>