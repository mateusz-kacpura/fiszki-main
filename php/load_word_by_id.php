<?php
function load_word_by_id($table, $row){
    $id = $row['id'];

    echo '<div class="arkusz">';
    
    echo '
        <div class="edytuj">
        <form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=edytuj&id='.$row['id'].'">
        <input type="text" name="a'.$id.'" placeholder="Wyrażenie polskie:" value="'.$row['v1'].'">
        <input type="text" name="b'.$id.'" placeholder="Wrażenie angielskie:"  value="'.$row['v2'].'">
        <input type="text" name="c'.$id.'" placeholder="Przykładowe zdanie" value="'.$row['zdanie'].'">
        <input type="submit" name="submit" class="przycisk przycisk1" value="Edytuj!"></form></div>';
        
    echo ' 
        <div class="usun"><form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=usun&id='.$row['id'].'">
        <input type="submit" name="submit" class="przycisk przycisk3" value="Usuń!"></form></div>
                                                                                ';
                                                                                
    echo '
        </div>
    ';
}
?>