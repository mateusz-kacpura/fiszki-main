<?php

function navigate_table($pdo){
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

        importuj_baze_danych($pdo);

    break;
    default:       

    break;                    

    } // zamykający swittch
}

?>