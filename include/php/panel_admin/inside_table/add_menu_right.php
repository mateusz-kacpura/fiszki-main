
<?php
require_once "buttons_activate_table.php";
require_once "add_form.php";

function add_menu_right($table){
        echo '
        <div class="menu">
           <div class="menubutton"><i class="icon-cog-alt"></i>
           </div><label class="input-sizer">
           <div class="menu-content"> 
                   <div>
                    '
        ;
                    buttons_activate_table($table);
                    add_form($table);
        echo '
                   </div>
           </div></label>
        </div>'
        ;
}

?>