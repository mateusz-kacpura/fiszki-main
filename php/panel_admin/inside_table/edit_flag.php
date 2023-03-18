<?php

function edit_flag($table, $pdo){
    $id = filtruj($_GET['id']);
    
    if (empty($id)){
        echo"Wystąpił następujący błąd: Nieprawidłowy numer 'id'";
    }

    try
    {
        $polecenie = ("UPDATE $table SET  `flaga` = '1'  WHERE id = '$id' ");
        $liczba = $pdo ->exec($polecenie);
        header("Location: tryb_edycji.php?zestaw=$table");
    }
    catch(PDOException $e)
    {
        //echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    } 
}
?>