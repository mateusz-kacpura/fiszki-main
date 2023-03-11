<?php
function html_wyszukaj_zestaw(){
    echo' <div></br>
                <h1>Wyszukiwanie zestawu</h1>
                <form action="tryb_wyboru.php?zestaw=wyszukaj_zestaw" method="post">
                    Wyszukaj zestaw: 
                        <input type="text" name="databasename">
                        <input class="submit" type="submit" value="Wyszukaj">
                </form>
          </div>';  
}

?>