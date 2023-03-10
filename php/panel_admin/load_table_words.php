<?

// plik nigdzie nie uzyty stworzony w celu podziału na pliki pliku tryb_edycji.php

require_once('../polaczeniePDO.php');
    
function load_table_words($tabela){
    try
    {
        $liczba = $pdo -> query("SELECT * FROM $tabela"); 
                                          
            while($row = $liczba->fetch())
            {
                load_table_words($tabela, $row);
            }
                  
    }
    catch(PDOException $e)
    {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    }
}

?>