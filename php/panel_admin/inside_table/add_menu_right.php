
<?php
require_once "buttons_activate_table.php";
require_once "add_form.php";

function add_menu_right($table){
        echo '
        <div class="menu">
           <div class="menu-content"> 
           <div>
                    '
        ;
                    buttons_activate_table($table);
                    //add_form($table); // blad
        echo '
                   </div>
           </div><div><center>ZESTAW</center></div>
        </div>'
        ;
}

?>