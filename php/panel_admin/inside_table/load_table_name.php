<?php

function load_table_name($tabela, $row){                    
        if ($row['flaga'] == 0){
                echo '
                   <div class="nowe_slowo">
                   <div id="deaktywuj" name="deaktywuj"  class="select_zestaw_0">
                   '.$tabela.' 
                    </div> 
                   </div>             
                    ';
        } else {
                echo '
                   <div  class="nowe_slowo">
                   <div id="aktywuj" name"aktywuj" class="select_zestaw_1">
                   '.$tabela.'</h2>
                    </div> 
                   </div>                  
                    ';
        }                    
}

function load_isset_table($tabela, $pdo){
  $querty = "SELECT name_table, flaga FROM info_table";
  try {
    $count=0;
    $flaga = $pdo ->query($querty) or die('Błąd zapytania SELECT');
    while($row = $flaga->fetch()){
      $count++;
      if($row['name_table'] == $tabela){
        load_table_name($tabela, $row);
        return true;
      }
      if (load_table_lastId($tabela, $pdo) == $count){
        trigger_error("Próba nadużycia połączenia z bazą danych</br>
                       Nie udało się hakerze :) </br>", E_USER_ERROR);
        return NULL;
         }
    }
  }
  catch(PDOException $e)
  {
    echo "Sprawdzenie zmiennej tabela nie powiodło się zadzwoń do funkcji isset_table";
  }
}

function load_table_lastId($tabela, $pdo){
  $querty = "SELECT id, name_table FROM info_table";
  $stmt = $pdo->query("SELECT LAST_INSERT_ID()");
  try {
    $flaga = $pdo ->query($querty) or die('Błąd zapytania SELECT');
    $lastId = $flaga->rowCount();
    return $lastId;
  }
  catch(PDOException $e)
  {
    echo "Sprawdzenie zmiennej tabela nie powiodło się zadzwoń do funkcji isset_table";
  }
}

function load_isset_table_not_return($tabela, $pdo){
  $querty = "SELECT name_table, flaga FROM info_table";
  try {
    $count=0;
    $flaga = $pdo ->query($querty) or die('Błąd zapytania SELECT');
    while($row = $flaga->fetch()){
      $count++;
      if($row['name_table'] == $tabela){
        return $tabela;
      }
      if (load_table_lastId($tabela, $pdo) == $count){
        trigger_error("Próba nadużycia połączenia z bazą danych</br>
                       Nie udało się hakerze :) </br>", E_USER_ERROR);
        return NULL;
      }
    }
  }
  catch(PDOException $e)
  {
    echo "Sprawdzenie zmiennej tabela nie powiodło się zadzwoń do funkcji isset_table";
  }
}

/*-------------------------*//*
Wojt gminy Daszyna
693 566 322

Firma rowerowa Ksawerowa
65 osob Pabianice
572 477 402
*//*-------------------------*/

?>