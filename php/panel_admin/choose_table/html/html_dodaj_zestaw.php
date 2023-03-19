<?php

function html_dodaj_zestaw(){
    // formularz tworzy wartość string zmiennej db_name
     echo '<div></br><label class="box-sizer">
                 <h1>Dodawanie nowego zestawu</h1>
                 <form action="tryb_wyboru.php?zestaw=dodaj_zestaw" method="post">
                 <label class="box-sizer">
                 <span>NAZWIJ ZESTAW: </span>
                         <input onInput="this.parentNode.dataset.value = this.value" size="1" type="text" name="databasename">
                </label>
                <label class="box-sizer">
                <span> </span>
                         <input onInput="this.parentNode.dataset.value = this.value" size="1" class="submit" type="submit" value="DODAJ">
                </label>
                 </form></label>
          </div>';
     
 }     

 