<?php

// plik nigdzie nie uzyty stworzony w celu podziału na pliki pliku tryb_edycji.php
    try
    {
        $querty = "UPDATE info_table SET flaga = '0' WHERE name_table = '$tabela' ";
        $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
        //echo $tabela. " zmodyfikowano na 0 czyli aktywny";
    header("Location: tryb_edycji.php?zestaw=$tabela");
      
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }
?>