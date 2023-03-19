<?php

function html_usun_zestaw(){
    // formularz tworzy i definuje zmienną db_name
    echo' <div></br><label class="box-sizer">
                <h1>Usuwanie zestawów</h1>
                <form action="tryb_wyboru.php?zestaw=usun_zestaw" method="post">
                 
                    <label class="box-sizer">
                    <span>NAZWA ZESTAWU: </span>
                        <input onInput="this.parentNode.dataset.value = this.value" size="1" type="text" name="databasename">
                    </label>
                    <label class="box-sizer">
                    <span> </span>
                        <input onInput="this.parentNode.dataset.value = this.value" size="1" class="submit" type="submit" value="USUŃ">
                    </label>
                </form></label>
          </div>';   
}

