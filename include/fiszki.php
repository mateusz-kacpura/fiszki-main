<?php
 // bTBPnBp9PFo4g1y1tvnqZ4fB require __DIR__ .'/vendor/mustache/mustache/src/Mustache/Autoloader.php';
// Mustache_Autoloader::register();
//  $m = new Mustache_Engine; echo $m->render('Hello, {{planet}}!', array('planet' => 'World')); // "Hello, World!"
require_once "polaczeniePDO.php";
if(!$pdo){
    header('location: index.php');//przekierowanie do logowania
}
require_once "php\panel_admin\choose_table\select_table_by_flag.php";
require_once "php/__navigate_page.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include('html/header.php') ?>

<body>


<?php 
$file_name = basename(__FILE__);
navigate_page($file_name);
select_table_by_flag_true($pdo);        
?>

    <div class="panel"><span></span><span></span>  </div>
     
    <?php require_once "html/audio_controls.php" ?>
                
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
