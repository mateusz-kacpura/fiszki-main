
<?php
require_once "buttons_activate_table.php";
require_once "add_form.php";

function add_menu_right($table){
        echo '
        <div class="menu">
           <div class="menubutton"><i class="icon-cog-alt"></i>
           </div>
           <div class="menu-content"> 
                   <div>
                    <h1>Operacje na słówkach</h1>'
        ;
                    buttons_activate_table($table);
                    add_form($table);
        echo '
                   </div>
           </div>
        </div>'
        ;
}

?>