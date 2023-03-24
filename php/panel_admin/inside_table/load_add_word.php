<?php
function load_add_word($table, $pdo){
    echo '
    <div class="edytuj">
    <form style="display: inline" method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=dodaj">
    <label class="input-sizer">
    <span>EN: </span>
    <input type="text" name="dodaj_element1" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Wyrażenie angielskie:" value=>
    </label>
    <label class="input-sizer">
    <span>PL: </span>
    <input type="text" name="dodaj_element2" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Wrażenie polskie:"  value=>
    </label>
    <label class="input-sizer">
    <span> </span>
    <input type="text" name="dodaj_element3" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Przykładowe zdanie" value=>
    </label>
    <input type="submit" name="submit" class="przycisk przycisk1" value="Dodaj">
    <input type="reset" name="" placeholder="deflaut" class="przycisk przycisk3" value="Wyczyść formularz">
    </form>
    </div>
    </div>
    '; 
}

?>