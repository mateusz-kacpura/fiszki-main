<?php
require_once "load_word_by_id.php";

function load_fishcards_all($table, $pdo){
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

?>