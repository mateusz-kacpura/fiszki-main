<?php
require_once "../../../polaczeniePDO.php";

$pathJSON = array();

// Zapytanie SELECT do pobrania danych z tabeli
$query = "SELECT ang FROM slownik";

// Wykonaj zapytanie i pobierz dane
try {
    $stmt = $pdo->query($query);
    $ang_values = $stmt->fetchAll(PDO::FETCH_COLUMN);
} catch(PDOException $e) {
    echo "Błąd podczas pobierania danych: " . $e->getMessage();
}

// Wyświetl dane w postaci tabeli HTML

for ($i = 0; $i < count($ang_values); $i++) {
    $filename = $ang_values[$i];
    $folderPath = '../../../files/words/mp3/';
    $default = 'default.mp3';

    //Ścieżki robocze do wyszukiwania jeśli istnieje zamieniam flagę
    $to = false;
    $a = false;

    // Szukaj pliku w folderze
    $path = $folderPath . $filename . ".mp3";
    if (file_exists($path)) {
        $pathJSON[] = $path;
    } else {
        // przygotowanie do pobrania ścieżek plików z ang.pl
        $filename = str_replace(" ", "-", $filename);
        $url = 'https://www.ang.pl/sound/dict/' . $filename . '.mp3';
        $content = @file_get_contents($url);
        // przygotowanie do pobrania ścieżek plików z Diki
        if ($content == false){
            $filename = str_replace(" ", "_", $filename);
            $url = 'https://www.diki.pl/images-common/en/mp3/' . $filename . '.mp3';
            $content = @file_get_contents($url);
        }
        if ($content == false){
            $pozycja_slowa = strpos($filename, "to "); // znajdzie "to " tylko na początku wyrażenia
            if ($pozycja_slowa === 0) {
                $nowe_wyrazenie = substr_replace($filename, "", $pozycja_slowa, strlen('to ')); // zamienia "to" na pusty ciąg znaków
            }
            $to = true;
            $url = 'https://www.diki.pl/images-common/en/mp3/' . $filename . '.mp3';
            $content = @file_get_contents($url);
        }
        // przygotowanie do zapisu w bazie danych programu pierwotnych ścieżek plików
        if($to==true){
            $filename = 'to '.$filename;
        }
        $filename = str_replace("-", "_", $filename);
        if ($content !== false) {
            if (file_put_contents($folderPath . $filename . '.mp3', $content) !== false) {
                $pathJSON[] = $folderPath . $filename . '.mp3';
            } else {
                if (!file_exists($folderPath)) {
                    $pathJSON[] = "Folder nie istnieje.";
                } elseif (!is_writable($folderPath)) {
                    $pathJSON[] = "Brak uprawnień do zapisu pliku.";
                } elseif (disk_free_space($folderPath) < strlen($content)) {
                    $pathJSON[] = "Brak miejsca na dysku.";
                } else {
                    $pathJSON[] = "Nieznany błąd podczas zapisu pliku.";
                }
            }
        } else {
            $pathJSON[] = null;// $folderPath . $default;
        }
    }
}

// zamknięcie połączenia z bazą danych
$conn = null;

$newpathJSON = array();
foreach ($pathJSON as $path) {
    $newpathJSON[] = str_replace("../", "", $path);
}

    // Konwertuj dane na format JSON z polskim kodowaniem
    $data = json_encode($newpathJSON, JSON_UNESCAPED_UNICODE);

    // Ustaw nagłówek Content-Type, aby przeglądarka widziała, że to dane JSON
    header('Content-Type: application/json; charset=utf-8');

    // Wyślij dane JSON do przeglądarki
    echo $data;
?>
