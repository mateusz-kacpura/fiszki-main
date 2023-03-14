<?php
function add_form($table){
    echo '<div class="nowe_slowo"><form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=dodaj">
        <label class="input-sizer">
          <span>PL: </span>
          <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="dodaj_element1" style="width: 250px">
          </label>
      </br>
        <label class="input-sizer">
          <span>EN: </span>
          <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="dodaj_element2" style="width: 250px">
      </label>
      </br>
        <label class="input-sizer">
          <span>ZDANIE: </span>
          <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="dodaj_element3" style="width: 250px">
      </label>
          </br>
          <input class="przycisk przycisk1" type="submit" name="submit" value="Wyślij">&nbsp;
      <input class="przycisk przycisk3" type="reset" value="Wyczyść formularz"></form></br>
      
  </div><div class="nowe_slowo">
  <form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=wyszukaj">
  <label class="input-sizer">
  <span>WYSZUKAJ SŁOWO: </span>
          <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="slowo" style="width: 250px">
    </label>
      </br>
          <input class="przycisk przycisk1" type="submit" name="submit" value="Wyślij">&nbsp;
          <input class="przycisk przycisk3" type="reset" value="Wyczyść formularz"></form>
  
  </div>';
}
?>