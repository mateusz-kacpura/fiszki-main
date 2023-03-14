<?php
function load_word_by_id($table, $row){
    $flaga = 1;

    if(!isset($table)){
        echo "Zabezpieczenie przed nadużyciem load_word_by_id.php";
        $flaga = 0;
    }

    if(!is_int($row['id'])){
        echo "Zabezpieczenie przed nadużyciem load_word_by_id.php";
        $flaga = 0;
    }

    if ($flaga==1){
    $id = $row['id'];
    
    echo '<div class="arkusz">';
    
    echo '
        <div class="edytuj">
        <form style="display: inline" method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=edytuj&id='.$row['id'].'">
        <label class="input-sizer">
        <span>EN: </span>
        <input type="text" name="a'.$id.'" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Wyrażenie polskie:" value="'.$row['v1'].'">
        </label>
        <label class="input-sizer">
        <span>PL: </span>
        <input type="text" name="b'.$id.'" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Wrażenie angielskie:"  value="'.$row['v2'].'">
        </label>
        <label class="input-sizer">
        <span> </span>
        <input type="text" name="c'.$id.'" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Przykładowe zdanie" value="'.$row['zdanie'].'">
        </label>
        <input type="submit" name="c'.$id.'" placeholder="deflaut" class="przycisk przycisk2" value="'.$row['flaga'].'">
        <input type="submit" name="submit" class="przycisk przycisk1" value="Edytuj!"></form>

        <form method="post" style="display: inline-block" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=usun&id='.$row['id'].'">
        <input type="submit" name="submit" class="przycisk przycisk3" value="Usuń!"></form></div></div>
        ';                                                                             
    }                                                  
}

function change_class_form(){
// placecholder zwruci zmienna x wartoscia w zaleznosci od wartosci flagi ymagane polaczenie pdo
// styl css trzeba napisac odpowiada przycisk 1
// 
}
function action_change_flag_for_word(){

}
?>