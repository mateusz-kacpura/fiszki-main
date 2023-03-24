<?php

require_once "filter.php";

function search_table_word($table, $pdo){

    $row_ang = 'v1';
    $row_pl = 'v2';

    $slowo = filtruj($_POST['slowo']);

    if (empty($slowo)){
        echo "Zabezpieczenie przed nadużyciem search_table_word.php";
      //header("Location: tryb_edycji.php?zestaw=$tabela");
    }

    try
    {
    $zapytanie = "SELECT * FROM $table WHERE $row_ang LIKE '$slowo' OR $row_pl LIKE '$slowo'";            
    $liczba = $pdo ->query($zapytanie) or die('Błąd zapytania');
    $wykonanie = $pdo->prepare($zapytanie);
    $wykonanie->execute();
    $licznik_id=$wykonanie->rowCount();
        if ($licznik_id == 0)
        { 
            header("Location: tryb_edycji.php?zestaw=$table");
        }
        else 
        {
            while($row = $liczba->fetch())
                            {                 
                            load_word_by_id($table, $row);
                            }
        }                                                          
    }
    catch(PDOException $e)
    {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        echo '</br><a href="tryb_edycji.php?zestaw='.$table.'">wróć</a>';
    }
}
?>