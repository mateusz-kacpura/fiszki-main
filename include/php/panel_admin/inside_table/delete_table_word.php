<?php
function delete_table_word($table, $pdo){
    $flaga = 1;
    if(!isset($_GET['id'])){
        echo "Zabezpieczenie przed nadużyciem delete_table_word.php";
        $flaga = 0;
    }
    if(is_int($_GET['id'])){
        echo "Zabezpieczenie przed nadużyciem pliku delete_table_word.php";
        $flaga = 0;
    }
    if($flaga == 1){
        $id = filtruj($_GET['id']);

        if (empty($id)){
            echo "Numer ID nie istnieje";
        }
        
        try
        {
        $pdo ->exec("DELETE FROM $table WHERE id = '$id' ") or die('Błąd zapytania');
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