<?php

require_once "polaczeniePDO.php";

try
{
$sql = $pdo -> query("SHOW TABLES"); 
                                    
      while($row = $sql->fetch())
      {
         echo '<label><input class="pokaz-tabele" type="radio" name="word_operation" value="'.$row[0].'" checked>'.$row[0].'</label>';
      }
            
}
catch(PDOException $e)
{
echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
}  

?>
 

