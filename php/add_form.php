<?php
function add_form($table){
    echo '<div class="nowe_slowo"><form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=dodaj">
          Wyrażenie polskie:
          <input type="text" name="dodaj_element1" style="width: 250px">
      </br>
          Wrażenie hiszpańskie:
          <input type="text" name="dodaj_element2" style="width: 250px">
      </br>
          Przykładowe zdanie:
          <input type="text" name="dodaj_element3" style="width: 250px">
      </br>
          <input type="submit" name="submit" value="Wyślij">&nbsp;
      <input type="reset" value="Wyczyść formularz"></form></br>
      
  </div><div class="nowe_slowo">
  <form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=wyszukaj">
  Wyszukaj słowo:
          <input type="text" name="slowo" style="width: 250px">
      </br>
          <input type="submit" name="submit" value="Wyślij">&nbsp;
          <input type="reset" value="Wyczyść formularz"></form>
  
  </div>';
}
?>