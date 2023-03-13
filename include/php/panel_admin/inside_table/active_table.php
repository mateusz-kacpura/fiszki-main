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

           $querty_select = "SELECT name_table, flaga FROM info_table WHERE name_table = '$table'";
           $flaga = $pdo ->query($querty_select) or die('Błąd zapytania SELECT pliku');
           $row = $flaga->fetch();
           if($row['flaga'] == 1){
            echo "Zestaw został już wcześniej deaktywowany";
            header("Location: tryb_edycji.php?zestaw=$table");
           }
           $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
           //echo $tabela. " zmodyfikowano na 1 czyli aktywny";
       header("Location: tryb_edycji.php?zestaw=$table");
         
       }
       catch(PDOException $e)
       {
          echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
          echo '</br><a href="tryb_edycji.php?zestaw='.$table.'">wróć</a>';
       }   
}
?>