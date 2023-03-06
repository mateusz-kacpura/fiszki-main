<?php
  include "baza.php";
 // include "table_select.php";
                     $result=mysqli_query($connect,$query);//wyszukuje nazwy tabel z db
                     while ($row = mysqli_fetch_array($result)) 
                     {
                        echo '<label><input class="pokaz-tabele" type="radio" name="word_operation" value="'.$row[0].'" checked>'.$row[0].'</label>';
                     }
                     
?>
 

