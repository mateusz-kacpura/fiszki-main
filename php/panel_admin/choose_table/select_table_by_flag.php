<?php 

function select_table_by_flag_all($pdo){
    $sql_true = "SELECT `name_table` FROM `info_table`  WHERE flaga = '1'";  
    $sql_false = "SELECT `name_table` FROM `info_table`  WHERE flaga = '0'"; 
    flag_all($sql_true, $sql_false, $pdo);
}
function select_table_by_flag_true($pdo){
    $sql_true = "SELECT `name_table` FROM `info_table`  WHERE flaga = '1'";
    flag_true($sql_true, $pdo);
}
function select_table_by_flag_false($pdo){
    $sql_false = "SELECT `name_table` FROM `info_table`  WHERE flaga = '0'";
    flag_false($sql_false, $pdo);
}

function flag_all($sql_true, $sql_false, $pdo){
    try
        {
            table_active($sql_true, $pdo);
            table_deactive($sql_false, $pdo);
        }
        catch(PDOException $e)
        {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        }
}

function flag_true($sql_true, $pdo){
    try
        {
            table_active($sql_true, $pdo);
        }
        catch(PDOException $e)
        {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        }
}

function flag_false($sql_false, $pdo){
    try
        {
            table_active($sql_false, $pdo);
        }
        catch(PDOException $e)
        {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        }
}

function table_active($sql_true, $pdo){
    if (count_button($sql_true, $pdo) == 1){
        echo "<h2>AKTYWNE ZESTAWY</h2>";   
        echo "<div class = 'select'></br>";
        write_button($sql_true, $pdo);
        echo "</div>";
    }
}

function table_deactive($sql_false, $pdo){
    if (count_button($sql_false, $pdo) == 1){
        echo "<h2>NIEAKTYWNE ZESTAWY</h2>";
        echo "<div class = 'select'>";
        write_button($sql_false, $pdo);
        echo "</div>";
    }
}

function write_button($button, $pdo){
    $button = $pdo->query($button);
    while ($row = $button->fetch()) {
        echo '<button >'.$row[0]."</button>";
    }   
}

function count_button($button, $pdo){
    $button = $pdo->query($button);
    $row = $button->fetch();
    if (!$row) { // here! as simple as that
        return 0;
    }
    else {
        return 1;
    }
}

?>