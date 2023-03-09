<?php 

// plik nigdzie nie uzyty stworzony w celu podziału na pliki pliku tryb_edycji.php

   /* :: tutaj zmieniam flagę w bazie danych
        ---------------------------
       - id - name_table - flaga -
       ---------------------------
       -  1 -   Unit_1   -   1   -  
       -    -            -       -
       ---------------------------  */

       try
       {
           $querty = "UPDATE info_table SET flaga = '1' WHERE name_table = '$tabela' ";
           $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
           //echo $tabela. " zmodyfikowano na 1 czyli aktywny";
           header("Location: tryb_edycji.php?zestaw=$tabela");
         
       }
       catch(PDOException $e)
       {
          echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
          echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
       }

?>