<?php

require_once "filter.php";

function search_table_word($table, $pdo){

    $angielski = 'v1';
    $polski = 'v2';
    $przyklad = 'weight';
    $zdanie = 'zdanie';
    $flaga_baza = 'flaga';

    $slowo = filtruj($_POST['slowo']);

    if (empty($slowo)){
        echo "Nie można wyszukać słowa";
      //header("Location: tryb_edycji.php?zestaw=$tabela");
    }

    try
    {
    $zapytanie = "SELECT * FROM $table WHERE $angielski LIKE '$slowo' OR $polski LIKE '$slowo'";
    echo $zapytanie;              
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

    }
}
?>