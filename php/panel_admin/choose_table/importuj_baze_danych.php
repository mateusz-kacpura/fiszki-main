<?php
function importuj_baze_danych($pdo){
    // czyta plik i wykonuje import
    $csvFile = "csvFile jest pusty";
    $csvFile=$_FILES["file"]["tmp_name"];
    $flaga = 1;   
    if (empty($_POST["nazwa_importowanej_tabeli"]))
    {
        $flaga = 0;
    }

    // należy tutaj opisać warunki sprawdzające poprawność wrzuconych danych i dające wskazówki jak należy przygotować właściwy plik do importu

    if ($flaga == 1)
    {
        $nazwa_importowanej_tabeli = $_POST["nazwa_importowanej_tabeli"];
        // tworze miejsce na importowane dane
        try
            {
                    $utworz_miejsce_na_importowana_tabele = "CREATE TABLE $nazwa_importowanej_tabeli ( id INT NOT NULL AUTO_INCREMENT ,  v1 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  v2 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  weight INT NOT NULL ,  zdanie VARCHAR(90) CHARACTER SET utf8 COLLATE utf8_general_ci  , flaga INT NOT NULL , PRIMARY KEY  (id)) ENGINE = InnoDB";
                    $pdo ->query($utworz_miejsce_na_importowana_tabele) or die('Błąd zapytania CREATE TABLE');
                    $querty = "INSERT INTO info_table (name_table, flaga) VALUES ('$nazwa_importowanej_tabeli', '0')";
                    $pdo ->query($querty) or die('Błąd zapytania INSERT INTO');
            }
        catch(PDOException $e)
            {
                echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
            }
        

        $handle = fopen($csvFile, "r");

        if ($handle) {
            while (($line = fgetcsv($handle)) !== false) {  
            try 
                {
                    $stmt = $pdo->prepare("INSERT INTO $nazwa_importowanej_tabeli (v1, v2, weight, zdanie, flaga) VALUES ('$line[0]','$line[1]','$line[2]','$line[3]','$line[4]')");
                    $stmt->execute([$line[0], $line[1], $line[2], $line[3], $line[4]]);
                } 
                catch (Exception $ex) 
                {
                    echo $ex->getmessage();
                }
            }
            fclose($handle);

        }
   
    } else { 
        echo "ERROR OPENING $csvFile"; 
    }
}
