

<?php
               include "baza.php";
                 
                 $result = "SELECT * FROM ".$_GET['table'];
                 $result=mysqli_query($connect,$result);
                 while($row = mysqli_fetch_array($result))
                  {
                    $id = $row['id'];
                    $value1=$row['v1'];
                    $value2=$row['v2'];
                    $value3=$row['zdanie'];
                    echo'
                       ID=<input type="text" style="width: 25px" value="'.$id.'" placeholder="ID:">
                          <input type="text"  value="'.$value1.'" placeholder="Angielskie:">
                          <input type="text"  value="'.$value2.'" placeholder="Polskie">
                          <input type="text" style="width: 550px" value="'.$value3.'" placeholder="Zdanie"><br>
                        '
                    ;    
                  }

         ?>
