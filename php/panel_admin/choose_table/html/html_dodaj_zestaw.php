<?php

function html_dodaj_zestaw(){
    // formularz tworzy wartość string zmiennej db_name
     echo '<div></br>
                 <h1>Dodawanie nowej tabeli</h1>
                 <form action="tryb_wyboru.php?zestaw=dodaj_zestaw" method="post">
                     Nazwa nowej tabeli:
                         <input type="text" name="databasename">
                         <input class="submit" type="submit" value="Dodaj">
                 </form>
          </div>';
     
 }     

 