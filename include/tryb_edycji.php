
<?php
require_once('polaczeniePDO.php');
require_once "php/panel_admin/inside_table/__function_routes.php";
require_once "php/__navigate_page.php";

if(!$pdo){
    header('location: index.php');//przekierowanie do logowania
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('html/header.php') ?>

<body>

<?php

$file_name = basename(__FILE__);

navigate_page($file_name);

$tabela = filtruj($_GET['zestaw']);

if(!isset($pdo)){
        echo "<h1>Nie można zrealizować połączenia z żadną bazą danych</h1>";
}
    
load_isset_table($tabela, $pdo); 

add_menu_right($tabela);

navigate_inside_table($tabela, $pdo);

?>
</body>
<?php include('js/panel_admin/inside_table/__scripts_routes.php') ?>