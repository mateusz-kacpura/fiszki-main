<?php
require_once "filter.php";

function edit_table_row($table, $pdo){
    $id = filtruj($_GET['id']);

    $edytuj_element1 = filtruj($_POST['a'.$id.'']);
    $edytuj_element2 = filtruj($_POST['b'.$id.'']);
    $edytuj_element3 = filtruj($_POST['c'.$id.'']);
    
    if (empty($id)){
        echo"Wystąpił następujący błąd: Nieprawidłowy numer 'id'";
    }
        
    if (empty($_POST['a'.$id.'']) || empty($_POST['b'.$id.''])){
        echo "Zabezpieczenie przed nadużyciem edit_table_row.php";
        //header("Location: tryb_edycji.php?zestaw=$table");
    }

    if ($_POST['a'.$id.''] == $edytuj_element1  && $_POST['b'.$id.''] == $edytuj_element2 && $_POST['c'.$id.''] == $edytuj_element3){
        echo "Zabezpieczenie przed nadużyciem edit_table_row.php";

        //header("Location: tryb_edycji.php?zestaw=$table");    
    }
    if(!isset($_POST['a'.$id.'']) && !isset($_POST['b'.$id.'']) && !isset($_POST['c'.$id.''])){
        echo "Zabezpieczenie przed nadużyciem edit_table_row.php";
        //header("Location: tryb_edycji.php?zestaw=$table");   
    }
    try
    {
        $polecenie = ("UPDATE $table SET  v1 = '$edytuj_element1' , v2 = '$edytuj_element2', weight = '1'  , zdanie = '$edytuj_element3' WHERE id = '$id' ");
        echo $polecenie;
        $liczba = $pdo ->exec($polecenie);
        header("Location: tryb_edycji.php?zestaw=$table");
    
    }
    catch(PDOException $e)
    {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        echo '</br><a href="tryb_edycji.php?zestaw='.$table.'">wróć</a>';
    } 
}
?>