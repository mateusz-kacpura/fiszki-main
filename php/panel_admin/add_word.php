<?php
require_once('filter.php');

function add_word($table, $pdo){

    $angielski = 'v1';
    $polski = 'v2';
    $przyklad = 'weight';
    $zdanie = 'zdanie';
    $flaga_baza = 'flaga';

        $dodaj_element1 = filtruj($_POST['dodaj_element1']);
        $dodaj_element2 = filtruj($_POST['dodaj_element2']);
        $dodaj_element3 = filtruj($_POST['dodaj_element3']); 

        if (empty($_POST['dodaj_element1']) || empty($_POST['dodaj_element2']))
        {
            exit(header("Location: tryb_edycji.php?zestaw=$table"));
        }                
                                                    
        //if ($_POST['dodaj_element1'] == $dodaj_element1  && $_POST['dodaj_element2'] == $dodaj_element2 && $_POST['dodaj_element3'] == $dodaj_element3) 
        //{
        //exit(header("Location: tryb_edycji.php?zestaw=$tabela"));
        //}
        
        try
        {
             $polecenie = "INSERT INTO $table ($angielski, $polski, $przyklad , $zdanie, $flaga_baza ) VALUES ('$dodaj_element1', '$dodaj_element2', '1', '$dodaj_element3', '0')";
             $liczba = $pdo ->exec($polecenie);
             exit(header("Location: tryb_edycji.php?zestaw=$table"));
        }
        catch(PDOException $e)
        {
           echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
           echo '</br><a href="tryb_edycji.php?zestaw='.$table.'">wróć</a>';
        }
}
	
?>