
<?php
include('baza.php');//sprawdzam połączenie
require_once('polaczeniePDO.php');
require_once "php/panel_admin/inside_table/__function_routes.php";

if(!$connect){
    header('location: index.php');//przekierowanie do logowania
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('html/header.php') ?>

<body>
<h2>PANEL ADMINISTRACYJNY</h2>

<div class="select" >

<button  id="przycisk">NAUKA</button>
<button  id="zestawy">ZARZĄDZAJ ZESTAWAMI</button>

</div>

<h2>TRYB EDYCJI</h2>
<?php

// typ pierwszy angielsko - poslki i polsko - angielski
$tabela = filtruj($_GET['zestaw']);    

    if(!isset($tabela)) { 
          header("Location: tryb_wyboru.php");
    }
    if(!isset($pdo)){
         echo "<h1>Nie można zrealizować połączenia z żadną bazą danych</h1>";
    }
    
load_table_name($tabela, $pdo); 

add_menu_right($tabela);

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

?>
</body>
<?php include('js/panel_admin/inside_table/__scripts_routes.php') ?>