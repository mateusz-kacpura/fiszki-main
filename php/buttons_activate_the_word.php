<?php

    function przyciski_aktywuj_deaktywuj($tabela){
        echo '
                   <div class="nowe_slowo">
                   <h2>'.$tabela.'</h2>
                   
                    <button id="aktywuj" name="aktywuj" class="przycisk przycisk1">Aktywuj</button>
                    <button id="deaktywuj" name"deaktywuj" class="przycisk przycisk3">Deaktywuj</button>
                   </div>        
             '; 
    
    } 


?>