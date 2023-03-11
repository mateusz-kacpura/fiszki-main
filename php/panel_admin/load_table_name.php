<?php
function load_table_name($tabela, $pdo){                    
    try
    {
        $querty = "SELECT name_table, flaga FROM info_table WHERE name_table = '$tabela'";
        $flaga = $pdo ->query($querty) or die('Błąd zapytania SELECT');
        $row = $flaga->fetch();
        //echo $tabela. " zmodyfikowano na 0 czyli aktywny";
        if ($row['flaga'] == 1){
                echo '
                   <div class="nowe_slowo">
                   <div class="select_zestaw">
                   <div class="wybrany_zestaw_zielony"><h2>'.$tabela.'</h2>
                     </div>
                    </div> 
                   </div>
                    
                    ';
        } else if ($row['flaga'] == 0)   {
                echo '
                   <div class="nowe_slowo">
                   <div class="select_zestaw">
                   <div class="wybrany_zestaw_czerwony"><h2>'.$tabela.'</h2>
                     </div>
                    </div> 
                   </div>
                    
                    ';
        }          
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }                   
}
?>