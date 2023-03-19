<?php

function buttons_activate_table($table){
        echo '
        </br>
        <label class="box-sizer">  
        <h1>OPERACJE NA SŁÓWKACH: </h1>  
          <div style="float:left" class="form-group">
            <div class="nowe_slowo">
                        <button id="aktywuj" name="aktywuj" class="przycisk przycisk1">Aktywuj</button>
                        <button id="deaktywuj" name"deaktywuj" class="przycisk przycisk3">Deaktywuj</button>
</br>
                        <button id="dodaj_fiszki_do_planu_nauki" name="dodaj_fiszki_do_planu_nauki" class="przycisk przycisk1">Dodaj fiszki do planu nauki</button>
                        <button id="usun_fiszki_z_planu_nauki" name"usun_fiszki_z_planu_nauki" class="przycisk przycisk3">Usun fiszki z planu nauki</button>
            </div>        
        </div>
    </label> </br></br>
             '; 
    
    } 
?>