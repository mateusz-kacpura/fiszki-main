<?php
function filtruj($zmienna) {

    if(!isset($zmienna)) { 
        echo "Zmienna nie istnieje|plik|filter.php";
        header("Location: tryb_wyboru.php");
    }

    $zmienna = not_clear_filter_alert($zmienna);

return $zmienna;

}

function not_clear_filter_alert($zmienna){
    $clear_get = stripslashes(htmlspecialchars(trim($zmienna)));
    if ($zmienna == $clear_get){
        return $clear_get;
    }
    else {
        echo "Próba wprowadzenia nieprawidłowych znaków została zablokowana|plik|filter.php";
    }
}

?>