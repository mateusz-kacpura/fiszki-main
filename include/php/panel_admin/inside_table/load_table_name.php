<?php

function load_table_name($tabela, $row){                    
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

function load_isset_table($tabela, $pdo){
  $querty = "SELECT name_table, flaga FROM info_table";
  try {
    $flaga = $pdo ->query($querty) or die('Błąd zapytania SELECT');
    while($row = $flaga->fetch()){
      if($row['name_table'] == $tabela){
        load_table_name($tabela, $row);
        return false;
      }
    }
  }
  catch(PDOException $e)
  {
    echo "Sprawdzenie zmiennej tabela nie powiodło się zadzwoń do funkcji isset_table";
  }
}
  
?>