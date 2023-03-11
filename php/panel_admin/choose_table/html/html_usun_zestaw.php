<?php

function html_usun_zestaw(){
    // formularz tworzy i definuje zmienną db_name
    echo' <div></br>
                <h1>Usuwanie tabel</h1>
                <form action="tryb_wyboru.php?zestaw=usun_zestaw" method="post">
                    Nazwa usuwanej tabeli: 
                        <input type="text" name="databasename">
                        <input class="submit" type="submit" value="Usuń">
                </form>
          </div>';   
}

