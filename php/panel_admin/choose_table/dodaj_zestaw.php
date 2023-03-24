<?php
function dodaj_zestaw($pdo){
// dodaje tak naprawdę dwa zestawy pierwszy z informacja o słówkach drugi z miejscem na nie
    // schemat tabel:
    
    /* :: tutaj flaga decyduje czy dany zestaw jest aktywny
        ---------------------------
       - id - name_table - flaga -
       ---------------------------
       -  1 -   Unit_1   -   1   -  
       -    -            -       -
       --------------------------- 
       
       :: tutaj flaga decyduje czy danego słówka w danej chwili chcemy się uczyć 
       ---------------------------------
       - id - v1 - v2 - zdanie - flaga -
       ---------------------------------
       -    -    -    -        -       -
       -    -    -    -        -       -
       ---------------------------------  */
       // formularz który zdefinuje zmienną db_name
       //  $query = "CREATE TABLE $db_name ( id INT NOT NULL AUTO_INCREMENT ,  v1 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  v2 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  weight INT NOT NULL ,    PRIMARY KEY  (id)) ENGINE = InnoDB";
    $flaga = 1;
    
    if (empty($_POST['databasename'])){
        echo "Taka nazwa bazy danych nie istnieje";
        $flaga = 0;
    }
    
    if($flaga == 1)
    {
        try
        {
            $db_name = $_POST['databasename'];
            $query = "CREATE TABLE $db_name ( id INT NOT NULL AUTO_INCREMENT ,  
                                              v1 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
                                              v2 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  
                                              weight INT NOT NULL ,    
                                              zdanie VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
                                              flaga INT NOT NULL ,    
                                              PRIMARY KEY  (id)) ENGINE = InnoDB";
            $pdo ->query($query) or die('Błąd zapytania CREATE TABLE');
            $querty = "INSERT INTO info_table (name_table, flaga) VALUES ('$db_name', '0')";
            $pdo ->query($querty) or die('Błąd zapytania INSERT INTO');
                    
        }
        catch(PDOException $e)
        {
            echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
            echo '</br><a href="tryb_wyboru.php">wróć</a>';
        }
    }
}
