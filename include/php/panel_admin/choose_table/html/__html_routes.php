<?php

require_once "html_dodaj_zestaw.php";
require_once "html_exportuj_baze_danych.php";
require_once "html_importuj_baze_danych.php";
require_once "html_usun_zestaw.php";
require_once "html_wyloguj.php";
require_once "html_wyszukaj_zestaw.php";

/* Wskazanie dowolnego projektu do zarządzania */

function html_choose_table_menu(){
    echo '
    <div class="menu">
    <div class="menu-content"> 
            <div>
                <h1>Operacje na zestawach</h1>'
    ;
                html_dodaj_zestaw();
                html_usun_zestaw();
                html_wyszukaj_zestaw();
                html_importuj_baze_danych();
                echo "</br>";
                html_exportuj_baze_danych();
                html_wyloguj();
    echo '
            </div>
    </div>
    </div>'
    ;
}
