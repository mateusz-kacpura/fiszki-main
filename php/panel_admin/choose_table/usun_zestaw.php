<?php
function usun_zestaw($pdo){
    // defincja db_name przychodzi z formlarza 
    $flaga = 1;

    if (empty($_POST['databasename']))
    {
        echo "Taka nazwa bazy danych nie istnieje";
        $flaga = 0;
    }

    if ($flaga == 1)
    {
        $db_name = $_POST['databasename'];   
        try
        {
        $querty = "DROP table $db_name";
        $pdo ->query($querty) or die('Błąd zapytania DROP');
        $querty = "DELETE FROM info_table WHERE name_table = '$db_name'";
        $pdo ->query($querty) or die('Błąd zapytania DELETE');
                
        }
        catch(PDOException $e)
        {
        echo 'Nie udało się znaleść danego zestawu w bazie danych: ';
        }
    }
}
