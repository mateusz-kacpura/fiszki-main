<?php
 // bTBPnBp9PFo4g1y1tvnqZ4fB require __DIR__ .'/vendor/mustache/mustache/src/Mustache/Autoloader.php';
// Mustache_Autoloader::register();
//  $m = new Mustache_Engine; echo $m->render('Hello, {{planet}}!', array('planet' => 'World')); // "Hello, World!"
require_once "polaczeniePDO.php";
if(!$pdo){
    header('location: index.php');//przekierowanie do logowania
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('html/header.php') ?>

<body>
<h2>NAUKA</h2>

<div class="select" >

<button class="fiszki" id="przycisk">NAUKA</button>
<button class="zestawy"  id="zestawy">ZARZĄDZAJ ZESTAWAMI</button>

</div>

        <?php require_once "php\panel_admin\choose_table\select_table_by_flag.php";
              select_table_flag_true($pdo); ?>

    <div class="panel"><span></span><span></span>  </div>
     
        <center>
                <h2>Sound Information</h2>
                <div id="length">Duration:</div>
                <div id="source">Source:</div>
                <div id="status" style="color:red;">Status: Loading</div>
                <hr>
                <h2>Control Buttons</h2>
                <button id="play">Play</button>
                <button id="pause">Pause</button>
                <button id="restart">Restart</button>
                <hr>
                <h2>Playing Information</h2>
                <div id="currentTime">0</div>               
                                                     </center>
                
    <a class="log_out" href="table_settings/log_out.php">Wyloguj</a>
    <div class="random_button"><i class="icon-arrows-ccw"></i></div>
                
    <div class="menu">
        <div class="menubutton"><i class="icon-cog-alt"></i></div>
        <div class="menu-content"> 
            <div>
                <h1>TRYBY NAUKI</h1>
                
            </div>
        </div>
    </div>
</body>
<?php include('js\panel_learning\__scripts_routes.php') ?>
</html>
