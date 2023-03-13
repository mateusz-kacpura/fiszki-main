<?php
require_once "load_word_by_id.php";
require_once "load_table_name.php";


function load_fishcards_all($table, $pdo){
      $flaga = 1;
      if (!isset($table)){
            echo "Błąd pliku load_fishcards_all.php";
            $flaga = 0;
      }
      if (load_isset_table_not_return($table, $pdo) != $table){
            echo "Zabezpieczenie przed nadużyciem load_fishcards.php";
            $flaga = 0;
      }
      if($flaga == 1){
            try
            {
            $liczba = $pdo -> query("SELECT * FROM $table"); 
                                                
                  while($row = $liczba->fetch())
                  {
                        $id = $row['id'];
                        load_word_by_id($table, $row);
                  }
                        
            }
            catch(PDOException $e)
            {
            echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
            }           
      }                                           
}

?>