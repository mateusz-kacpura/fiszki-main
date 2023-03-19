<?php

function edit_flag_all_on_1($table, $pdo){
    echo "tutaj";
    try
    {
        $liczba = $pdo -> query("SELECT * FROM $table WHERE `flaga` = '0'");                                     
        while($liczba->fetch())
        {
            echo "tutaj";
                $polecenie = ("UPDATE $table SET  `flaga` = '1'");
                $pdo ->exec($polecenie);
                header("Location: tryb_edycji.php?zestaw=$table");
        }
    }
    catch(PDOException $e)
    {
        //echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    } 
}

function edit_flag_all_on_0($table, $pdo){
    try
    {
        $liczba = $pdo -> query("SELECT * FROM $table WHERE `flaga` = '1'");                                 
        while($liczba->fetch())
        {
                $polecenie = ("UPDATE $table SET  `flaga` = '0'");
                $pdo ->exec($polecenie);
                header("Location: tryb_edycji.php?zestaw=$table");
        }
    }
    catch(PDOException $e)
    {
        //echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    } 
}


function edit_flag($table, $pdo){
    $id = filtruj($_GET['id']);
    $flaga_by_id  = return_row_flag($table, $id, $pdo);

    if (empty($id)){
        echo"Wystąpił następujący błąd: Nieprawidłowy numer 'id'";
    }

    try
    {
        if($flaga_by_id == 0){
            $polecenie = ("UPDATE $table SET  `flaga` = '1'  WHERE id = '$id' ");
            $pdo ->exec($polecenie);
            header("Location: tryb_edycji.php?zestaw=$table");
        }
        if($flaga_by_id == 1){
            $polecenie = ("UPDATE $table SET  `flaga` = '0'  WHERE id = '$id' ");
            $pdo ->exec($polecenie);
            header("Location: tryb_edycji.php?zestaw=$table");
        } 
    }
    catch(PDOException $e)
    {
        //echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    } 
}

function return_row_flag($table, $id, $pdo){
    $flaga = 1;
    if (!isset($table)){
        echo "Błąd pliku edit_flag.php";
        $flaga = 0;
    }
    if (load_isset_table_not_return($table, $pdo) != $table){
        echo "Zabezpieczenie przed nadużyciem edit_flag.php";
        $flaga = 0;
    }
    if($flaga == 1){
        try
        {
        $liczba = $pdo -> query("SELECT * FROM $table WHERE `id` = $id"); 
                                            
                while($row = $liczba->fetch())
                {
                    $flaga_by_id = $row['flaga'];
                    return $flaga_by_id;
                }
                    
        }     
        catch(PDOException $e)
        {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        }      
    }

     
}  
?>