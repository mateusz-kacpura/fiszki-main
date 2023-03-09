
<?php
include('baza.php');//sprawdzam połączenie
require_once('polaczeniePDO.php');
require_once "php/__function_routes.php";

if(!$connect){
    header('location: index.php');//przekierowanie do logowania
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>

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
<script src="js/action_click_activate_the_word_set.js"></script>
<script src="js/action_click_deactivate_the_word_set.js"></script>
<script src="js/action_click_menu_button.js"></script>
<script src="js/click_connections.js"></script>

<script>

//----------Funkcje obslugujące zestaw - jeszcze nie działają i powodują błędy ---------//

$(document).ready(function() {
    $('.wybrany_zestaw').click(function(){
        $('.wybrany_zestaw').removeClass('active')
        console.log(this.classList.add('active'))
    })
})

// usun_zestaw
</script>