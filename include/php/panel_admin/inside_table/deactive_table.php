<?php
function deactive_table($table, $pdo){
    try
    {
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

?>