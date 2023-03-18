<?

// plik nigdzie nie uzyty stworzony w celu podziału na pliki pliku tryb_edycji.php

require_once('../polaczeniePDO.php');
require_once "load_table_name.php";
    
function load_table_words($tabela, $pdo){
    $flaga = 1;
    if(!isset($table)){
        echo "Zabezpieczenie przed nadużyciem load_table_words.php";
        $flaga = 0;
    }
    if(!load_isset_table_not_return($tabela, $pdo)){
        echo "Zabezpieczenie przed nadużyciem load_table_words.php";
        $flaga = 0;
    }
    if($flaga==1){
        
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
}

?>