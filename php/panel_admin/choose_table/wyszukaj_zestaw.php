<?php
function wyszukaj_zestaw($pdo){
 // defincja db_name przychodzi z formlarza
 $flaga = 1;

 if (empty($_POST['databasename']))
 {
     echo "Taka nazwa bazy danych nie istnieje";
     $flaga = 0;
 }
  
 if($flaga == 1)
 {
     $db_name = $_POST['databasename'];
     try 
     {
     $querty = "SELECT table_name  FROM information_schema.tables where table_schema='fiszki_nauka_slowek' AND table_name LIKE '$db_name'";
     $liczba = $pdo ->query($querty) or die('Nie znaleziono wybranej bazy danych');
     $wykonanie = $pdo->prepare($querty);
     $wykonanie->execute();
     $licznik_id=$wykonanie->rowCount();
         printf("<h2>WYSZUKANA BAZA DANYCH</h2>");
                     while($row = $liczba->fetch())
                     {                 
                         printf("<div class='select'><button>".$row[0]."</button></div>");
                     }

     }
     catch(PDOException $e)
     {
         echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
         echo '</br><a href="tryb_wyboru.php">wróć</a>';
     }
 }
}
?>