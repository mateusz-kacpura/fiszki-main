<?php
function navigate_page($file_name){
    if ($file_name == "tryb_edycji.php"){
        echo "<h2>PANEL ADMINISTRACYJNY</h2>";
        require_once "./html/head_menu.php";
    }
    if ($file_name == "tryb_wyboru.php"){
        echo "<h2>PANEL ADMINISTRACYJNY</h2>";
        require_once "./html/head_menu.php";
    }
    if ($file_name == "fiszki.php"){
        echo "<h2>NAUKA</h2>";
        require_once "./html/head_menu.php";
    }
    if ($file_name == "przyklad.php"){
        echo "<h2>TEST</h2>";
        require_once "./html/head_menu.php";
    }
}
?>