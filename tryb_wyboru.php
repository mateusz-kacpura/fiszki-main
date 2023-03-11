
<?php

require_once('polaczeniePDO.php');
if(!$pdo){
    header('location: index.php');//przekierowanie do logowania
}
require_once "php/panel_admin/choose_table/html/__html_routes.php";
require_once "php/panel_admin/choose_table/__function_routes.php";

?>
<!DOCTYPE html>
<html lang="en">

<?php include('html/header.php') ?>

<body>
<h2>PANEL ADMINISTRACYJNY</h2>

<div class="select" >

<button  class="fiszki" id="przycisk">NAUKA</button>
<button  class="zestawy" id="zestawy">ZARZĄDZAJ ZESTAWAMI</button>

</div>

<?php
html_choose_table_menu();
?>

<div>

<?
// poruszanie sie po stronie
if(!isset($_GET['zestaw']))   {

    $_GET['zestaw'] = 'zestaw';
 
}
// zarzadzanie zestawami
switch($_GET['zestaw']){

case 'dodaj_zestaw':

    dodaj_zestaw($pdo);
    
break;
case 'usun_zestaw':

    usun_zestaw($pdo);  
    
break;
case 'wyszukaj_zestaw':

    wyszukaj_zestaw($pdo);
        
break;
case 'importuj_baze_danych':

    importuj_baze_danych($csvFile, $pdo);

break;
default:       

break;                    

} // zamykający swittch

?>
<?php
echo "<div>";
    select_table_flag_all($pdo);
echo "</div>";
?>
</div>
</body>

<script>
 $('.select button').click(function(){
            $('.select button').removeClass('active')
            console.log(this.classList.add('active'))
        })

const menu_click = document.querySelector('.menubutton').addEventListener('click', (e) => {
    document.querySelector('.menu').classList.toggle('active');
});

</script>

<?php include('js/panel_admin/choose_table/__scripts_routes.php') ?>