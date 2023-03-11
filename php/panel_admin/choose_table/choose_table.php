<?php 

function choose_table($pdo){
$sql_true = "SELECT `name_table` FROM `info_table`  WHERE flaga = '1'";  
$sql_false = "SELECT `name_table` FROM `info_table`  WHERE flaga = '0'";  

try
    {
        if (count_button($sql_true, $pdo) == 1){
            echo "<h2>AKTYWNE ZESTAWY</h2>";   
            echo "<div class = 'select'></br>";
            write($sql_true, $pdo);
            echo "</div>";
        }
        if (count_button($sql_false, $pdo) == 1){
            echo "<h2>NIEAKTYWNE ZESTAWY</h2>";
            echo "<div class = 'select'>";
            write($sql_false, $pdo);
            echo "</div>";
        }
    }
    catch(PDOException $e)
    {
    echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    }
}

function write($button, $pdo){
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