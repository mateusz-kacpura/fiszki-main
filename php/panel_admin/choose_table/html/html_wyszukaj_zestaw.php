<?php
function html_wyszukaj_zestaw(){
    echo' <div></br><label class="box-sizer">
                <h1>Wyszukiwanie zestawu</h1>
                <form action="tryb_wyboru.php?zestaw=wyszukaj_zestaw" method="post">
                    
                    <label class="box-sizer">
                    <span>NAZWA ZESTAWU: </span>
                        <input onInput="this.parentNode.dataset.value = this.value" size="1" type="text" name="databasename">
                    </label>
                    <label class="box-sizer">
                    <span> </span>
                        <input onInput="this.parentNode.dataset.value = this.value" size="1" class="submit" type="submit" value="SZUKAJ">
                    </label>
                </form></label>
          </div>';  
}

