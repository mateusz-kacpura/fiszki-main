<?php
function filtruj($zmienna) {
    $zmienna = stripslashes($zmienna); // usuwamy slashe

// usuwamy spacje, tagi html oraz niebezpieczne znaki
return htmlspecialchars(trim($zmienna));
}
?>