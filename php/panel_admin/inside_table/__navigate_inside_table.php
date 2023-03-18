<?php

require_once "__function_routes.php";

function navigate_inside_table($tabela, $pdo){
// poruszanie sie po stronie
if(!isset($_GET[$tabela]))   {

    $_GET[$tabela] = 'panel_administracyjny';
 
 }

// zarzadzanie zestawami
switch($_GET[$tabela]){

case 'dodaj':          
    
add_word($tabela, $pdo);

break;
                                  
case 'edytuj':

edit_table_row($tabela, $pdo);

break;
                          
case 'usun':

delete_table_word($tabela, $pdo);

break;
                                  
case 'wyszukaj':

search_table_word($tabela, $pdo);

break;

case 'aktywuj':

active_table($tabela, $pdo);

break;

case 'deaktywuj':

deactive_table($tabela, $pdo);
    
break;
                              
default:

load_fishcards_all($tabela, $pdo);
    
break;

}
}
?>